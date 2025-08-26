FROM php:8.2-apache

# Habilitar extensões comuns do PHP (opcional)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Habilitar mod_rewrite do Apache
RUN a2enmod rewrite
