FROM php:8.1-buster

RUN apt-get update \
    && apt-get install -y git

COPY --from=composer /usr/bin/composer /usr/bin/composer