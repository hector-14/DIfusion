# Imagen base de PHP con Apache
FROM php:8.1-apache

# Instala las dependencias requeridas para PHPMailer (SMTP, SSL, etc.)
RUN docker-php-ext-install mysqli

# Da permisos a los archivos del proyecto en el contenedor
RUN chmod -R 755 /var/www/html

RUN apt-get update && apt-get install -y php-mbstring php-xml

# Instala Composer desde otra imagen
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copia los archivos del proyecto a la carpeta del servidor
COPY . /var/www/html/

# Accede a la carpeta donde está el archivo composer.json antes de instalar
WORKDIR /var/www/html/Difusion/phpmailer
RUN composer install --no-dev --optimize-autoloader

# Da permisos a la carpeta donde están tus archivos
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Exponer el puerto 80 para acceder al servidor
EXPOSE 80

# Inicia el servidor Apache
CMD ["apache2-foreground"]
