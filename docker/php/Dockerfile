FROM php:7.2-fpm

RUN apt-get update && apt-get install -y \
    libpq-dev libfreetype6-dev libjpeg62-turbo-dev libmcrypt-dev libsqlite3-dev libssl-dev libcurl3-dev libxml2-dev libzzip-dev supervisor \
    && docker-php-ext-configure gd \
        --with-gd \
        --with-freetype-dir=/usr/include/ \
        --with-png-dir=/usr/include/ \
        --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install ctype curl dom gd hash iconv intl json mbstring mysqli opcache pdo pdo_mysql pdo_pgsql pgsql phar posix session simplexml sockets tokenizer xml xmlrpc xmlwriter zip \
    && curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer

RUN pecl install redis && docker-php-ext-enable redis

#RUN chown -R www-data:www-data /var/www/html
RUN usermod -u 1000 www-data

COPY thanos-worker.conf /etc/supervisor/conf.d/thanos-worker.conf

CMD ["php-fpm"]