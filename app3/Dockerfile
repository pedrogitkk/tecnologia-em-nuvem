# Usar uma imagem base do PHP com Apache
FROM php:8.1-apache

# Ativar o módulo rewrite do Apache
RUN a2enmod rewrite

# Definir o diretório de trabalho
WORKDIR /var/www/html

# Copiar os arquivos da aplicação para o diretório de trabalho no contêiner
COPY . /var/www/html/

# Expôr a porta 80
EXPOSE 80

# Definir o comando de inicialização (o Apache)
CMD ["apache2-foreground"]
