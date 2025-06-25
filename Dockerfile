FROM php:8.2-apache

# Enable mod_rewrite and set DirectoryIndex
RUN a2enmod rewrite

# Set DirectoryIndex to use index.php
RUN echo "DirectoryIndex index.php index.html" > /etc/apache2/conf-enabled/index.conf

# Copy your app
COPY . /var/www/html/
