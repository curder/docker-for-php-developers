FROM php:7.4-apache

COPY docker/composer-installer.sh /usr/local/bin/composer-installer

RUN apt-get -yqq update \
    && apt-get -yqq install  --no-install-recommends zip unzip \
    && chmod +x /usr/local/bin/composer-installer \ 
    && composer-installer \
    && mv composer.phar /usr/local/bin/composer \
    && chmod +x /usr/local/bin/composer \
    && composer --version


WORKDIR /tmp
COPY composer.json composer.lock auth.json /tmp/
RUN composer install \
    --no-interaction \
    --no-plugins \
    --no-scripts \
    --prefer-dist \
    && rm -rf composer.json composer.lock auth.json vendor/

WORKDIR /var/www/html

COPY . /var/www/html

RUN composer install \
    --no-interaction \
    --no-plugins \
    --no-scripts \
    --prefer-dist