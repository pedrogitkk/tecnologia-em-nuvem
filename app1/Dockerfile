FROM php:8.2-apache

ENV PORT=8080

RUN a2enmod rewrite

COPY . /var/www/html/

RUN chown -Rwww-data:www-data /var/www/html && chmod -R 755 /var/www/html
