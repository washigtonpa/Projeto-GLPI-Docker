
# GLPI Docker Setup

Este projeto fornece uma configuração completa para rodar o GLPI em contêineres Docker, utilizando o Traefik como proxy reverso para gerenciar o roteamento de tráfego e os certificados SSL. A configuração inclui opções para diferentes versões do GLPI.


Conteúdo

    1. Pré-requisitos

    2. Configuração Inicial Comum

    3. Opção A: GLPI v11.0.0-rc4

    4. Opção B: GLPI v10.0.20

    5. Configuração do Traefik

    6. Notas e Solução de Problemas

    
    
- Estrutura do Projeto

A estrutura de diretórios foi projetada para ser modular e fácil de gerenciar, separando as configurações e dados persistentes da aplicação.

---
    Bash

    glpi-docker/
    ├── .env                  # Armazena as variáveis de ambiente (senhas, usuários)
    ├── docker-compose.yml    # Orquestra a criação dos contêineres
    ├── glpi/
    │   └── entrypoint.sh     # Script de inicialização do contêiner do GLPI
    ├── init/
    │   └── init-db.sh        # Script para conceder permissões extras ao banco
    └── storage/
        ├── glpi/
        │   ├── config/       # Armazena config_db.php e glpicrypt.key
        │   └── files/        # Diretório principal de arquivos do GLPI
        ├── marketplace/      # Armazena plugins baixados do marketplace
        └── mysql/            # Armazena os dados do MariaDB

---

* Arquivos de Configuração

## 1. Arquivo .env

Este arquivo centraliza todas as variáveis de ambiente sensíveis, como senhas e nomes de usuário, para manter seu docker-compose.yml limpo e seguro.

Crie um arquivo .env na raiz do projeto com o seguinte conteúdo:
Snippet de código

* Variáveis do Banco de Dados MariaDB

        GLPI_DB_ROOT_PASSWORD=rootpass
        GLPI_DB_NAME=glpi
        GLPI_DB_USER=glpi
        GLPI_DB_PASSWORD=glpi     

* Outras Variáveis
TZ=America/Sao_Paulo

## 2. Arquivo glpi/entrypoint.sh

O entrypoint.sh é o primeiro script a ser executado quando o contêiner do GLPI é iniciado. Ele serve para realizar tarefas de preparação que o contêiner precisa antes de começar a rodar a aplicação GLPI em si.

Crie o arquivo glpi/entrypoint.sh e adicione o conteúdo abaixo. Dê permissão de execução: chmod +x glpi/entrypoint.sh.

    Bash
    ---
    #!/bin/bash
    
    echo "Iniciando GLPI..."
    
    * Tenta habilitar timezones, mas não trava se falhar
    /var/www/glpi/bin/console database:enable_timezones || echo "Timezones não habilitados (GLPI pode não estar instalado ainda)"
    
    * Inicia o Apache normalmente
    exec docker-php-entrypoint apache2-foreground


* Garante que os diretórios necessários existam
mkdir -p /var/glpi/files
mkdir -p /var/glpi/config

* Define a posse dos diretórios para o usuário www-data (ID 33)
chown -R 33:33 /var/glpi/files /var/glpi/config /var/glpi/marketplace

* Executa o comando padrão do contêiner (inicia o Apache)
exec docker-php-entrypoint "$@"

## 3. Arquivo init/init-db.sh

Este script é executado apenas na primeira vez que o contêiner do MariaDB é criado. Ele pode ser usado para executar comandos SQL iniciais, como a criação de um usuário com privilégios específicos.

Crie o arquivo init/init-db.sh com o seguinte conteúdo:

    Bash
    
    ---
    #!/bin/bash
    echo "GRANT SELECT ON mysql.time_zone_name TO 'glpi'@'%'; FLUSH PRIVILEGES;" | mariadb -u root -p"rootpass"
    
    ---

## 4. Configuração Inicial Comum

Esses passos são obrigatórios para qualquer versão do GLPI que você escolher.

* 4.1. Crie a Rede proxy

O Traefik precisa de uma rede dedicada para se comunicar com outros contêineres. Crie-a com o seguinte comando:
Bash

docker network create proxy

* 4.2. Crie a Estrutura de Diretórios

O Docker precisa de diretórios no seu host para armazenar os dados persistentes do GLPI e do MariaDB. Crie-os e defina as permissões corretas para o usuário www-data (UID 33) do contêiner.
Bash

mkdir -p storage/glpi/files storage/glpi/config storage/marketplace storage/mysql init

* Atribua a posse dos diretórios ao usuário 'www-data' (ID 33)
sudo chown -R 33:33 storage
sudo chown -R 33:33 init

* Defina permissões de leitura/escrita para o dono e leitura para os outros
sudo chmod -R 775 storage

## 5. Opção A: GLPI v11.0.0-rc4

Esta versão do GLPI gerencia a criação de subdiretórios automaticamente, simplificando a configuração.

* 5.1. Arquivo docker-compose.yml, Crie um arquivo chamado docker-compose.yml na raiz do seu projeto com o seguinte conteúdo.

YAML

    services:
      glpi:
        image: "glpi/glpi:11.0.0-rc4"
      restart: unless-stopped
        volumes:
          - "./storage/glpi/files:/var//glpi/files:rw"
          - "./storage/glpi/config:/var/glpi/config:rw"
          - "./storage/marketplace:/var/glpi/marketplace:rw"
          - "./glpi/entrypoint.sh:/entrypoint.sh"
        entrypoint: ["/entrypoint.sh"]
        env_file: .env
        container_name: glpi-docker-11
        user: "33:33"
        networks:
          - default
          - proxy
        labels:
          # --- Configuração do Traefik ---
          - "traefik.enable=true"
          # Define que este serviço pertence à rede do proxy para o Traefik
          - "traefik.docker.network=proxy"
          # --- Roteador HTTP ---
          # Cria um roteador chamado 'glpi' que responde no domínio abaixo
          - "traefik.http.routers.glpi.rule=Host(`glpi11.wpacloud.tech`)"
          # Associa este roteador ao entrypoint seguro (HTTPS)
          - "traefik.http.routers.glpi.entrypoints=websecure"
          # HABILITA o TLS para este roteador (aqui está a correção principal)
          - "traefik.http.routers.glpi.tls=true"
          # --- Serviço ---
          # Define qual porta interna do container o Traefik deve usar
          - "traefik.http.services.glpi.loadbalancer.server.port=80"
      db:
        image: "mariadb:10.11"
        restart: unless-stopped
        environment:
          - MARIADB_ROOT_PASSWORD=rootpass
          - MARIADB_DATABASE=glpi
          - MARIADB_USER=glpi
          - MARIADB_PASSWORD=glpi
          - TZ=${TZ}
        volumes:
          - "./storage/mysql:/var/lib/mysql"
          - "./init/init-db.sh:/docker-entrypoint-initdb.d/init-db.sh"
        networks:
          - default
        healthcheck:
          test: ["CMD-SHELL", "mariadb -u${GLPI_DB_USER} -p${GLPI_DB_PASSWORD} ${GLPI_DB_NAME} -e 'SELECT 1' || exit 1"]
          interval: 10s
        container_name: glpi-docker-db-11
    networks:
      proxy:
        name: proxy
        external: true
      default:
        name: glpi_net #rede interna

## 6. Opção B: GLPI v10.0.20

Esta versão exige a criação manual de todos os subdiretórios antes de iniciar o contêiner.

* 6.1. Crie os Subdiretórios

      Bash

      mkdir -p storage/glpi/files/_dumps
      mkdir -p storage/glpi/files/_graphs
      mkdir -p storage/glpi/files/_lock
      mkdir -p storage/glpi/files/_pictures
      mkdir -p storage/glpi/files/_plugins
      mkdir -p storage/glpi/files/_rss
      mkdir -p storage/glpi/files/_sessions
      mkdir -p storage/glpi/files/_tmp
      mkdir -p storage/glpi/files/_uploads

* 6.2. Arquivo docker-compose.yml

Crie um arquivo docker-compose.yml com a seguinte configuração.

    YAML

    services:
      glpi:
        image: "glpi/glpi:10.0.20"
        restart: unless-stopped
        volumes:
          - "./storage/glpi/files:/var/glpi/files:rw"
          - "./storage/glpi/config:/var/glpi/config:rw"
          - "./storage/marketplace:/var/glpi/marketplace:rw"
          - "./glpi/entrypoint.sh:/entrypoint.sh"
        entrypoint: ["/entrypoint.sh"]
        env_file: .env
        container_name: glpi-docker-10
        user: "33:33"
        networks:
          - default
          - proxy

        labels:
          # --- Configuração do Traefik ---
          - "traefik.enable=true"
          # Define que este serviço pertence à rede do proxy para o Traefik
          - "traefik.docker.network=proxy"
          # --- Roteador HTTP ---
          # Cria um roteador chamado 'glpi' que responde no domínio abaixo
          - "traefik.http.routers.glpi.rule=Host(`glpi11.wpacloud.tech`)"
          # Associa este roteador ao entrypoint seguro (HTTPS)
          - "traefik.http.routers.glpi.entrypoints=websecure"
          # HABILITA o TLS para este roteador (aqui está a correção principal)
          - "traefik.http.routers.glpi.tls=true"
          # --- Serviço ---
          # Define qual porta interna do container o Traefik deve usar
          - "traefik.http.services.glpi.loadbalancer.server.port=80"
      db:
        image: "mariadb:10.11"
        restart: unless-stopped
        environment:
          - MARIADB_ROOT_PASSWORD=rootpass
          - MARIADB_DATABASE=glpi
          - MARIADB_USER=glpi
          - MARIADB_PASSWORD=glpi
          - TZ=${TZ}
        volumes:
          - "./storage/mysql:/var/lib/mysql"
          - "./init/init-db.sh:/docker-entrypoint-initdb.d/init-db.sh"
        networks:
          - default
        healthcheck:
          test: ["CMD-SHELL", "mariadb -u${GLPI_DB_USER} -p${GLPI_DB_PASSWORD} ${GLPI_DB_NAME} -e 'SELECT 1' || exit 1"]
          interval: 10s
        container_name: glpi-docker-db-10

    networks:
      proxy:
        name: proxy
        external: true
      default:
        name: glpi_net #rede interna

## 7. Configuração do Traefik

  * Estrutura das pastas
  
        traefik/
        certs/
          traefik.crt
          traefik.key
        traefik.yml
        docker-compose.yml

Crie um docker-compose.yml separado para o Traefik. Ele atuará como o proxy reverso para todos os seus serviços.

* 7.1 Gerar o certificado com OpenSSL na VM de Docker.

  *Criar a pasta do certificado no mesmo diretorio onde está o compose do Traefik
   mkdir -p ./certs

  *Executar os comandos abaixo:

    mkdir -p ./certs

      openssl req -x509 -newkey rsa:4096 -sha256 -days 365 \
        -nodes -keyout ./certs/traefik.key \
        -out ./certs/traefik.crt \
        -subj "/CN=traefik.wpacloud.tech" \
        -addext "subjectAltName=DNS:traefik.wpacloud.tech"

* 7.2. Arquivo docker-compose.yml do Traefik

      YAML
          services:
        4   traefik:
        5     image: traefik:v3.0
        6     container_name: traefik
        7     restart: unless-stopped
        8     ports:
        9       - "80:80"
        10       - "443:443"
        11       # A porta 8080 só é necessária se você quiser acessar a API/Dashboard sem o Traefik rotear para ela.
        12       # - "8080:8080" 
        13     volumes:
        14       - "/var/run/docker.sock:/var/run/docker.sock:ro"
        15       - "./traefik.yml:/etc/traefik/traefik.yml:ro" # Monta o arquivo de configuração estática
        16       - "./certs:/certs:ro" # Monta os certificados em modo somente leitura
        17     labels:
        18       - "traefik.enable=true"
        19       - "traefik.http.routers.traefik-dashboard.rule=Host(`traefik.wpacloud.tech`)"
        20       - "traefik.http.routers.traefik-dashboard.service=api@internal"
        21       - "traefik.http.routers.traefik-dashboard.entrypoints=websecure"
        22       - "traefik.http.routers.traefik-dashboard.tls=true" # Habilita TLS para este router
        23     networks:
        24       - proxy
        25
        26 networks:
        27   proxy:
        28     name: proxy
        29     external: true

    *Arquivo traefik.yml do Traefik   

      
        3 # Definição dos pontos de entrada (HTTP e HTTPS)
        4 entryPoints:
        5   web:
        6     address: ":80"
        7     # Redireciona todo o tráfego de HTTP (web) para HTTPS (websecure)
        8     http:
        9       redirections:
        10         entryPoint:
        11           to: websecure
        12           scheme: https
        13
        14   websecure:
        15     address: ":443"
        16     # Habilita TLS no entrypoint HTTPS
        17     http:
        18       tls: {}
        19
        20 # Habilita a API e o Dashboard
        21 api:
        22   dashboard: true
        23   insecure: true # CUIDADO: Permite acesso ao dashboard via :8080 sem autenticação. Remova em produção.
        24
        25 # Configuração do provedor Docker
        26 providers:
        27   docker:
        28     exposedByDefault: false # Boa prática para não expor todos os containers por padrão
        29     network: proxy # Diz ao Traefik para usar a rede 'proxy' para se conectar aos containers
        30
        31 # ONDE A MÁGICA ACONTECE: Seção para definir os certificados
        32 tls:
        33   certificates:
        34     - certFile: "/certs/traefik.crt"
        35       keyFile: "/certs/traefik.key"


* 7.3. Importar o certificado para sua maquina local (cliente)
Para evitar o aviso de "site não confiável", você pode importar o certificado no sistema:

      sudo cp traefik.crt /usr/local/share/ca-certificates/traefik.crt
      sudo update-ca-certificates


## 8. Notas e Solução de Problemas

    Permissões: O usuário www-data no contêiner tem UID 33. Certifique-se de que a posse de todos os diretórios de armazenamento (storage/) no seu host esteja definida para esse ID (sudo chown -R 33:33 storage/).

    Acesso Local: Para acessar glpi.seu-dominio.com e traefik.seu-dominio.com em seu ambiente de teste, adicione a seguinte linha ao arquivo /etc/hosts (no Linux/macOS) ou C:\Windows\System32\drivers\etc\hosts (no Windows), substituindo o IP pelo da sua VM:

    192.168.ip_onde_esta_rodando_container glpi.seu-dominio.com traefik.seu-dominio.com

    Dashboard do Traefik: Para acessar o dashboard (na porta 8080).


docker exec -it traefik cat /etc/traefik/traefik.yml
