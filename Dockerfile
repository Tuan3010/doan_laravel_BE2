FROM php:8.2-fpm-alpine

# Set working directory
ARG workdir=/var/www/html

WORKDIR $workdir

# Install system dependencies
RUN apk update
RUN apk add --no-cache \
    libjpeg-turbo-dev \
    libpng-dev \
    libwebp-dev \
    freetype-dev \
    libzip-dev \
    zip \
    bash \
    dos2unix

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN docker-php-ext-install exif
RUN docker-php-ext-install zip
RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install -j$(nproc) gd

#syns php.init
COPY ./docker/php/php.ini /usr/local/etc/php/

COPY . /var/www/html

# Get latest Composer
COPY --from=composer /usr/bin/composer /usr/bin/composer

# Copy the docker-app-start.sh script from the local directory into the container
COPY docker-start.sh /var/www/html

# Set executable permission for docker-app-start.sh
RUN chmod +x /var/www/html/docker-start.sh


# RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache/

CMD ["/var/www/html/docker-start.sh"]