FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    libicu-dev libpq-dev git unzip \
    && docker-php-ext-install intl pdo pdo_mysql

WORKDIR /var/www/html

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

RUN composer install --no-interaction || true