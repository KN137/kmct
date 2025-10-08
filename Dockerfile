# Use the official PHP-Apache image
FROM php:8.2-apache

# Update system packages to address vulnerabilities
RUN apt-get update && apt-get upgrade -y && apt-get clean

# Copy your site files to the Apache document root
COPY . /var/www/html/

# Install required PHP extensions (optional, e.g., mysqli)
RUN docker-php-ext-install mysqli

# Expose port 80
EXPOSE 80