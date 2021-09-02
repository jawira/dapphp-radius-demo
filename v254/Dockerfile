FROM composer:2.1 AS composer
FROM php:7.4
COPY --from=composer /usr/bin/composer /usr/bin/composer
WORKDIR /app
ARG DEBIAN_FRONTEND=noninteractive
ENV COMPOSER_ALLOW_SUPERUSER=1
COPY . /app
RUN apt-get update \
    && apt-get --yes --no-install-recommends install \
        zip \
        libzip-dev \
    && docker-php-ext-install \
        zip \
    && composer install
