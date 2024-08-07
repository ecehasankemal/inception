#!/bin/bash

chown -R www-data: /var/www/*; # wordpressin ana userı www-data yapıyoruz.
                               # www-data web serverın useridir. benim buradaki kullanıcım ngnix

chmod -R 755 /var/www/*;
mkdir -p /run/php/;
touch /run/php/php7.4-fpm.pid; # php fastcgi

if [ ! -f /var/www/html/wp-config.php ]; then # bu dosya yoksa.
    mkdir -p /var/www/html;
    cd /var/www/html;

    wp-cli core download --allow-root; # word press clientten cekirdegi indiriyor

    wp-cli config create --allow-root \  #
        --dbname=$MYSQL_DATABASE \
        --dbuser=$MYSQL_USER \
        --dbpass=$MYSQL_PASSWORD \
        --dbhost=$MYSQL_DB_HOST;

    echo "Wordpress: setting up..."

    wp-cli core install --allow-root \
        --url=$WP_URL \
        --title=$WP_TITLE \
        --admin_user=$WP_ADMIN_LOGIN \
        --admin_password=$WP_ADMIN_PASSWORD \
        --admin_email=$WP_ADMIN_EMAIL;

    wp-cli user create --allow-root \
        $WP_USER_LOGIN $WP_USER_EMAIL \
        --user_pass=$WP_USER_PASSWORD;
fi

echo "Wordpress: set up!"

exec "$@"
