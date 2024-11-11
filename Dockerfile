# Use PHP with Apache
FROM php:7.4-apache

# Copy application files
COPY public/ /var/www/html/
COPY server.php /var/www/html/

# Expose the default web port
EXPOSE 80
