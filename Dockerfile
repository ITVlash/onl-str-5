FROM php:7.4-apache

# Установка необходимых расширений PHP
RUN docker-php-ext-install pdo pdo_mysql mysqli

COPY . /var/www/html/

EXPOSE 80
