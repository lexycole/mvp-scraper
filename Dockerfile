# Stage 1: Install Dependencies using Composer
FROM composer:lts AS deps
WORKDIR /app

# Copy the entire application code to make artisan available
COPY . .

RUN composer install --no-dev --no-interaction --prefer-dist

RUN apk add --no-cache \
    oniguruma-dev \
    libzip-dev \
    && docker-php-ext-install mbstring zip pdo pdo_mysql

RUN chown -R www-data:www-data /app

# Stage 2: Final Laravel Setup on Apache
FROM php:8.2-apache AS final

# Enable Apache mod_rewrite for Laravel
RUN a2enmod rewrite

# Set PHP production configurations
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

# Install PostgreSQL client and enable pdo_pgsql extension
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install pdo_pgsql pgsql

# Copy the custom Apache configuration file 
COPY apache.conf /etc/apache2/conf-available/servername.conf
RUN a2enconf servername

ENV APACHE_DOCUMENT_ROOT /var/www/html/public
# Update the Apache configuration files to use the correct DocumentRoot
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

WORKDIR /var/www/html

# Copy all necessary Laravel files from the previous stage
COPY --from=deps /app/ .

RUN chown -R www-data:www-data storage bootstrap/cache

RUN chmod +x artisan

RUN if [ -f .env ]; then php artisan key:generate; else echo "Skipping key generation (ensure .env is configured)"; fi

EXPOSE 80

USER www-data

CMD ["sh", "-c", "php artisan migrate --force && apache2-foreground"]