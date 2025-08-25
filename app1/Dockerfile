FROM php:8.2-apache

ENV PORT=8080

RUN a2enmod rewrite

COPY . /var/www/html/

RUN chown -Rwww-data:www-data /var/www/html && chmod -R 755 /var/www/html

Run sed -i "s/Listen 80/Listen ${PORT}/" /etc/apache2/ports.conf && \
sed -i "s/<VirtualHost \*:80>/<VirtualHost \*:${POST}>/" /etc/apache2/sites-avaliable/000-default.conf

RUN echo '<Directory /var/www/html>' >> /etc/apache2/apache2.conf && \  
    echo '     Options indexes FollowSystemLinks' >> /etc/apache2/apache2.conf && \
    echo '     AllowOverride all' >> /etc/apache2/apache2.conf && \
    echo '     Require all granted' >> /etc/apache2/apache2.conf && \
    echo '</Directory>' >> /etc/apache2/apache2.conf && \


 EXPOSE ${PORT}
 CMD ["apache2-forgeround"]
    
