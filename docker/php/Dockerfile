FROM php:8.1-fpm

RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install mysqli pdo_mysql mbstring exif pcntl bcmath gd
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli


WORKDIR /var/www/html
# Куда же без composer'а.
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

