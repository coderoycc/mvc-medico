FROM php:8.0-apache
COPY . /var/www/html

ENV DB_HOST sqlserver-express
ENV DB_PORT 1433
ENV DB_DATABASE my_database
ENV DB_USERNAME usuario
ENV DB_PASS pass123

EXPOSE 80