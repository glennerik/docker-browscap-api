FROM richarvey/nginx-php-fpm
COPY index.php /var/www/html/
COPY rdns.php /var/www/html/rdns/index.php
COPY php.ini /usr/local/etc/php/
RUN wget -S --header="accept-encoding: gzip" -O-  "https://browscap.org/stream?q=Full_PHP_BrowsCapINI" | gunzip > /browscap.ini
