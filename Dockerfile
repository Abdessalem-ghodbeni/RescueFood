FROM php:8.2

# Update and install necessary packages
RUN apt-get update -y && apt-get install -y \
    openssl zip unzip git \
    libonig-dev default-mysql-client \
    libfreetype6-dev libjpeg62-turbo-dev libpng-dev libzip-dev

# Install and configure PHP extensions (including GD)
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo_mysql mbstring gd zip

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory
WORKDIR /app
COPY . /app

# Install PHP dependencies via Composer
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Command to run your application
CMD php artisan serve --host=0.0.0.0 --port=8000

# Expose the port for the application
EXPOSE 8000
