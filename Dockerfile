# Stage 1: Install Dependencies using Composer
FROM composer:lts AS deps
WORKDIR /app

# Copy the entire application code to make artisan available
COPY . .

# Install dependencies without dev dependencies for production
RUN composer install --no-dev --no-interaction --prefer-dist

# Install necessary PHP libraries using apk (Alpine package manager)
RUN apk add --no-cache \
    oniguruma-dev \
    libzip-dev \
    && docker-php-ext-install mbstring zip pdo pdo_mysql

# Change ownership of the application files
RUN chown -R www-data:www-data /app

# Stage 2: Final Laravel Setup on Apache
FROM php:8.2-apache AS final

# Enable Apache mod_rewrite for Laravel
RUN a2enmod rewrite

# Set PHP production configurations
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

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

# Ensure correct permissions for Laravel storage & cache
RUN chown -R www-data:www-data storage bootstrap/cache

# Make artisan executable
RUN chmod +x artisan

# Generate Laravel App Key if .env exists
RUN if [ -f .env ]; then php artisan key:generate; else echo "Skipping key generation (ensure .env is configured)"; fi

# Expose port 80 for Apache
EXPOSE 80

# Set user to www-data for security
USER www-data

# Run Apache in the foreground
CMD ["apache2-foreground"]