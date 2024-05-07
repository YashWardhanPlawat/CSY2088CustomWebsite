FROM dunglas/frankenphp
#pdo install command
RUN docker-php-ext-install pdo pdo_mysql

#COPY . /app/public