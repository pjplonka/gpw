FROM php:8-apache
ARG BUILD_ENV

WORKDIR /var/www/html

## -- Copy sources
ADD . /var/www/html

## Copy apache configurations
COPY docker/php-dev.ini /usr/local/etc/php/php.ini
