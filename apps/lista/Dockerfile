# Partimos de la imagen de PHP con Apache
FROM php:7.4-apache 

# Activamos los modulos de mysql
RUN docker-php-ext-install mysqli &&  docker-php-ext-enable mysqli

# Copiamos el codigo fuente a la imagen
COPY src/ /var/www/html/
