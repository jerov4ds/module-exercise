# Use an official PHP image
FROM php:8.2-fpm-alpine

# Set working directory
WORKDIR /var/www

# Install dependencies
RUN apk add --no-cache \
    mysql-client \
    libpng-dev \
    libjpeg-turbo-dev \
    libwebp-dev \
    libxpm-dev \
    libzip-dev \
    libxml2-dev \
    bash git curl unzip

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql gd zip

# Copy the application
COPY . .

# Set permissions
RUN chown -R www-data:www-data /var/www

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --no-dev --optimize-autoloader

# Expose port
EXPOSE 59000

CMD sh -c "php artisan migrate --force --seed && php artisan serve --host=0.0.0.0 --port=59000"
