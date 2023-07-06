FROM php:latest

# Install dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip

# Copy project files to the container
COPY . /var/www/html

# Install project dependencies
RUN composer install --no-dev --optimize-autoloader

# Set the working directory
WORKDIR /var/www/html

# Install project dependencies
RUN composer install --no-dev --optimize-autoloader