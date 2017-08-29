FROM php:7.0-apache

EXPOSE 80

COPY www/ /var/www/html/

CMD ["apache2ctl", "-D", "FOREGROUND"]