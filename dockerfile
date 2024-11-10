FROM php:7.4-apache

RUN a2enmod rewrite

RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

EXPOSE 80
