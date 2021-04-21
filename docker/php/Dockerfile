FROM php:7.4-fpm

# Argumentos definidos no arquivo "docker-compose.yml"
ARG uid=1000
ARG user="server"

# Definido usuário root para executar as instalações e configurações
USER root

# Instalar dependências do sistema
RUN apt-get update && \
    apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libpq-dev \
    libxml2-dev \
    zip \
    unzip 

# Instalar extensões PHP
RUN docker-php-ext-configure pgsql && \
    docker-php-ext-install bcmath pdo pgsql pdo_pgsql pdo_mysql mbstring exif pcntl gd

# Instalar NodeJs
RUN curl -fsSL https://deb.nodesource.com/setup_14.x | bash - && apt-get install -y nodejs

# Limpar cache do "apt"
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Instalar o composer
RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/bin/composer

# Verifica se o usuário definido no arquivo "docker-compose.yml" existe
# Este usuário irá executar os comandos do Composer e Artisan
# Caso não exista, então adiciona
RUN if [ ! $(getent passwd $user) ]; \
    then \
        useradd -G www-data,root -u $uid -d /home/$user $user; \
        mkdir -p /home/$user/.composer && chown -R $user:$user /home/$user; \
    fi

# Define o diretório de trabalho
WORKDIR /var/www

# Usuário que irá executar os comandos do Composer e Artisan
USER $user
