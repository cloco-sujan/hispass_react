FROM php:8.4-fpm

WORKDIR /var/www/html

# Install common PHP extensions (optional)
RUN apt-get update && apt-get install -y \
    libzip-dev zip unzip \
    && docker-php-ext-install zip pdo pdo_mysql

# Optional: Add Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
