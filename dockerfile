FROM composer:latest

# Copy PHP from your local installation
COPY C:\laragon\bin\php\php-8.1.10-Win32-vs16-x64/php.exe /usr/local/bin/php

# Set the working directory
WORKDIR /var/www/html

# Copy your PHP application files
COPY . /var/www/html

# Install project dependencies
RUN composer install --no-dev --optimize-autoloader

# Expose the port if needed
# EXPOSE 80

# Start the PHP application
CMD ["php", "-S", "0.0.0.0:80", "-t", "/var/www/html"]
