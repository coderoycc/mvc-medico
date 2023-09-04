FROM php:8.1-apache
RUN apt-get update && apt-get install -y \
    unixodbc-dev
RUN pecl install pdo_sqlsrv sqlsrv

RUN docker-php-ext-enable pdo_sqlsrv sqlsrv
ENV DB_PASS royberT0908
COPY . /var/www/html/
RUN a2enmod rewrite 