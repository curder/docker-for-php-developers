FROM php:7.4-apache

COPY . /var/www/html
COPY docker/vhost.conf /etc/apache2/sites-available/000-default.conf

# Install redis extension
RUN set -xe \
    && pecl install -o -f redis \
    && echo "extension=redis.so" > /usr/local/etc/php/conf.d/docker-php-ext-redis.ini \
    && rm -rf /usr/share/php \
    && rm -rf /tmp/*

RUN chown -R www-data:www-data /var/www/html \
    && docker-php-ext-install pdo_mysql \
    && a2enmod rewrite