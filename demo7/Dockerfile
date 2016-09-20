FROM php:7.0-apache

RUN apt-get update && apt-get install -y libssl-dev
RUN pecl install mongodb
RUN echo "extension=mongodb.so" > /usr/local/etc/php/conf.d/docker-php-pecl-mongodb.ini
COPY ./www /var/www/html
