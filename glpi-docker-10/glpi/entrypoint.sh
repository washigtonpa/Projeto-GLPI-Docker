#!/bin/bash

echo "Iniciando GLPI..."

# Tenta habilitar timezones, mas não trava se falhar
/var/www/glpi/bin/console database:enable_timezones || echo "Timezones não habilitados (GLPI pode não estar instalado ainda)"

# Inicia o Apache normalmente
exec docker-php-entrypoint apache2-foreground
