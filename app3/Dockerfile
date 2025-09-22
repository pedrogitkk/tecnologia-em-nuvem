# Usa a imagem oficial do PHP com Apache
FROM php:8.1-apache

# Habilita o módulo rewrite do Apache (opcional, mas útil)
RUN a2enmod rewrite

# Define o diretório de trabalho do Apache
WORKDIR /var/www/html

# Limpa a pasta padrão do Apache
RUN rm -rf /var/www/html/*

# Copia o conteúdo da pasta app3 para a raiz do Apache
COPY app3/ /var/www/html/

# Expõe a porta 80
EXPOSE 80

# Comando para iniciar o Apache
CMD ["apache2-foreground"]
