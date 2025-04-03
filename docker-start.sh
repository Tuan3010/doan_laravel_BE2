#!/bin/bash
composer install
php /var/www/html/artisan key:generate
php /var/www/html/artisan migrate
php /var/www/html/artisan db:seed
#php /var/www/artisan queue:listen --timeout=0 &

php-fpm -F