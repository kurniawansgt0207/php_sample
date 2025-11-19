FROM php:8.2-apache

# Install extension yang dibutuhkan
RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip \
    libpq-dev \
    && docker-php-ext-install pdo pdo_mysql

# Set working directory Apache
WORKDIR /var/www/html

# Copy source code ke dalam container
COPY ./var/www/html

# (Opsional) permission kalau perlu
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
