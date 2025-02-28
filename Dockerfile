# PHP 8.2 asosiy image
FROM php:8.2-cli

# Kerakli kutubxonalarni o'rnatish
RUN apt-get update && apt-get install -y \
    curl \
    git \
    unzip \
    && docker-php-ext-install pdo_mysql
# Composer o'rnatish
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
# Ishchi katalog
WORKDIR /app

# Fayllarni nusxalash
COPY . /app

# Webhook uchun port ochish
EXPOSE 80

# Botni ishga tushirish
CMD ["php", "-S", "0.0.0.0:80", "-t", "/app"]