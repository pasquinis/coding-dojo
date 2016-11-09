FROM alpine:3.4

MAINTAINER Simone Pasquini <simone.pasquini@gmail.com>

RUN apk update && \
    apk add \
        'ca-certificates' \
        'wget' \
        'php5=5.6.27-r0' \
        'php5-phar=5.6.27-r0' && \
    rm -rf /var/cache/apk/*

RUN wget https://phar.phpunit.de/phpunit.phar && \
    chmod +x phpunit.phar && \
    mv phpunit.phar /usr/local/bin/phpunit
