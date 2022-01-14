FROM php:8.0.5
RUN apt-get update -y && apt-get install -y openssl zip unzip git libonig-dev libssl-dev pkg-config
RUN pecl install mongodb && docker-php-ext-enable mongodb
RUN echo "extension=mongodb.so" >> /usr/local/etc/php/php.ini
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN docker-php-ext-install pdo mbstring
WORKDIR /app
COPY . /app
RUN composer install

CMD php artisan serve --host=0.0.0.0 --port=8181
EXPOSE 8181