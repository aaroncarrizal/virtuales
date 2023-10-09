FROM php:apache

# Instalar extensiones PHP necesarias (MySQLi)
RUN docker-php-ext-install mysqli pdo_mysql

# Copiar los archivos de la aplicación al contenedor
COPY ./php /var/www/html

# Establecer los permisos adecuados para los archivos
RUN chown -R www-data:www-data /var/www/html

# Habilitar el sitio default-ssl y activar mod_rewrite
RUN a2enmod rewrite
