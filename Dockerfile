# Usar a imagem oficial do PHP com Apache
FROM php:7.4-apache

# Instalar as extens�es necess�rias
RUN docker-php-ext-install mysqli

# Habilitar o mod_rewrite do Apache
RUN a2enmod rewrite

# Copiar os arquivos do projeto para o diret�rio root do Apache
COPY . /var/www/html/

# Definir permiss�es
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html
