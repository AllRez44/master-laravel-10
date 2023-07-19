FROM composer:2.3.10

### Installl Node and node dependencies
RUN wget -q0- https://deb.nodesource.com/setup_18.x | bash
RUN apk add --update nodejs npm
COPY package*.json .
RUN npm install

### Install PHP and Composer dependencies
COPY composer.json .
COPY composer.lock .
RUN composer install --prefer-dist

### Copy the remaining files
COPY . .

EXPOSE 8000
CMD ["php", "artisan", "serve"]
