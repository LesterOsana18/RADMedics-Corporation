# Use PHP 8 with FPM
FROM php:8.2-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    unzip \
    zip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    nodejs \
    npm \
    nginx \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Set working directory
WORKDIR /var/www

# Copy composer from official composer image
COPY --from=composer:2.5 /usr/bin/composer /usr/bin/composer

# Copy project files
COPY . .

# Install PHP dependencies (so vendor/ exists before frontend build)
RUN composer install --no-dev --optimize-autoloader

# Build frontend assets after composer install
RUN npm install && npm run build

# Set permissions for Laravel storage & cache
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Copy Nginx config
COPY ./nginx.conf /etc/nginx/conf.d/default.conf

# Expose port 80 for web traffic
EXPOSE 80

# Start Nginx + PHP-FPM
CMD ["sh", "-c", "nginx && php-fpm -F"]

