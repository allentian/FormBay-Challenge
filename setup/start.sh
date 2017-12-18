#!/bin/bash

# Set custom webroot
#if [ ! -z "$WEBROOT" ]; then
# sed -i "s#root /var/www;#root ${WEBROOT};#g" /etc/nginx/sites-available/default.conf
#else
# webroot=/var/www
#fi
cd /var/www

# Display PHP error's or not
if [[ "$ERRORS" != "1" ]] ; then
 echo php_flag[display_errors] = on >> /usr/local/etc/php-fpm.conf
else
 echo php_flag[display_errors] = on >> /usr/local/etc/php-fpm.conf
fi

# Display Version Details or not
#if [[ "$HIDE_NGINX_HEADERS" == "0" ]] ; then
# sed -i "s/server_tokens off;/server_tokens on;/g" /etc/nginx/nginx.conf
#else
# sed -i "s/expose_php = On/expose_php = Off/g" /usr/local/etc/php-fpm.conf
#fi

sleep 20
php yii migrate --interactive=0

# Start supervisord and services
exec /usr/bin/supervisord -n -c /etc/supervisord.conf
