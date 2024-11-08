# Usa una imagen base de PHP con Apache
FROM php:8.1-apache

# Instala las dependencias requeridas para PHPMailer (SMTP, SSL, etc.)
RUN apt-get update -y && apt-get install -y \
    apt-utils \
    php-mbstring \
    php-xml \
    && docker-php-ext-install mysqli \
    && rm -rf /var/lib/apt/lists/*

# Instala Composer en el contenedor
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copia los archivos del proyecto a la carpeta del servidor
COPY . /var/www/html/

# Accede a la carpeta donde está el archivo composer.json antes de instalar
WORKDIR /var/www/html/Difusion/phpmailer
RUN composer install --no-dev --optimize-autoloader

# Da permisos a la carpeta donde están tus archivos
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Expone el puerto 80 para acceder al servidor
EXPOSE 80

# Inicia el servidor Apache
CMD ["apache2-foreground"]
