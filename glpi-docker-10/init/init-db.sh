#!/bin/bash
echo "GRANT SELECT ON mysql.time_zone_name TO 'glpi'@'%'; FLUSH PRIVILEGES;" | mariadb -u root -p"rootpass"
