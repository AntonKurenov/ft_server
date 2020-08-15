#!/bin/bash

chown -R www-data:www-data /var/www/*
chmod -R 755 /var/www/*

cp default_index_on /etc/nginx/sites-available/default
ln -s /etc/nginx/sites-available/default /etc/nginx/sites-enabled/default

wget https://files.phpmyadmin.net/phpMyAdmin/4.9.0.1/phpMyAdmin-4.9.0.1-all-languages.tar.gz
tar -xzvf phpMyAdmin-4.9.0.1-all-languages.tar.gz
mv phpMyAdmin-4.9.0.1-all-languages/ /var/www/phpmyadmin
cp phpmyadmin.inc.php /var/www/phpmyadmin/config.inc.php

wget https://wordpress.org/latest.tar.gz
tar -xzvf latest.tar.gz
cp -r wordpress/. /var/www/wordpress
cp wp-config.php /var/www/wordpress/

service nginx restart
service mysql restart
service php7.3-fpm start

bash
