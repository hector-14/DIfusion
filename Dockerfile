# Imagen base de PHP con Apache
FROM php:8.1-apache

# Instala las dependencias requeridas para PHPMailer (SMTP, SSL, etc.)
RUN docker-php-ext-install mysqli

RUN chmod -R 755 /path/to/your/project

RUN apt-get update && apt-get install -y php-mbstring php-xml

RUN apt-get update && apt-get install -y composer

# Copia los archivos del proyecto a la carpeta del servidor
COPY . /var/www/html/

# Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Instala las dependencias de Composer (incluido PHPMailer)
RUN composer install --no-dev --optimize-autoloader

# Da permisos a la carpeta donde están tus archivos
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Exponer el puerto 80 para acceder al servidor
EXPOSE 80

# Inicia el servidor Apache
CMD ["apache2-foreground"]

