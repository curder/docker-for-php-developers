FROM php:7.4-apache

COPY . /var/www/html
COPY docker/vhost.conf /etc/apache2/sites-available/000-default.conf
COPY docker/config/php/*.ini /usr/local/etc/php/conf.d/

RUN chown -R www-data:www-data /var/www/html \
    && docker-php-ext-install pdo_mysql \
    && pecl install xdebug-2.9.8 redis \
    && docker-php-ext-enable xdebug redis \
    && a2enmod rewrite
