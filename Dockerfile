FROM php:8.2.0-fpm

RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip \
    libpng-dev \
    libonig-dev\
    libxml2-dev \
    libpng-dev \
    libjpeg-dev \
    && docker-php-ext-install zip \
    && docker-php-ext-install intl \
    && docker-php-ext-enable intl \
    && docker-php-ext-install mysqli pdo_mysql \
    && docker-php-ext-enable zip \
    && docker-php-ext-enable mysqli pdo_mysql\
    && docker-php-ext-install zip  \
    && docker-php-ext-configure gd --with-jpeg \
    && docker-php-ext-install mbstring \
    && docker-php-ext-install gd \
    && docker-php-ext-enable gd  

RUN docker-php-ext-install pdo pdo_mysql sockets zip
RUN curl -sS https://getcomposer.org/installer​ | php -- \
     --install-dir=/usr/local/bin --filename=composer

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app
COPY . .

RUN cp .env.example .env

# COPY bash/start.sh /usr/local/bin/start
# COPY deployments/imagick/policy.xml /etc/ImageMagick-6/policy.xml
# RUN chmod +x /usr/local/bin/start


CMD ["sh", "-c", "sleep 10 && php artisan migrate --force && php-fpm"]

EXPOSE 8000