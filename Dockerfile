FROM ubuntu:20.04

# 1001 = docker / env non-interactive
ENV DEBIAN_FRONTEND=noninteractive

ENV PHP_OPCACHE_ENABLE="1"
ENV PHP_OPCACHE_MEMORY_CONSUMPTION="128"
ENV PHP_OPCACHE_MAX_ACCELERATED_FILES="10000"
ENV PHP_OPCACHE_REVALIDATE_FREQUENCY="0"
ENV PHP_OPCACHE_VALIDATE_TIMESTAMPS="0"

# Zendto version var
ARG ZENDTO_VERSION=6.11-2

LABEL description="Zendto docker container" \
      tags="build-0.2" \
      maintainer="fle108 <33028922+fle108@users.noreply.github.com"

# define locale en_US and install other locales
RUN apt-get update && apt-get install -y locales \
    && localedef -i en_US -c -f UTF-8 -A /usr/share/locale/locale.alias en_US.UTF-8

# need to define localtime for tzdata pre-install
RUN ln -fs /usr/share/zoneinfo/Europe/Paris /etc/localtime

# update system and install basics needed
RUN apt-get update && apt-get upgrade -y \
    && apt-get install -y \
                jq \
                apt-utils \
                tzdata \
                gdebi-core \
                apache2 \
                software-properties-common \
                wget \ 
                apt-transport-https \ 
                curl \
                mysql-client \
                clamav \
                clamav-daemon \
                libsodium-dev \
                libcurl4 \
                libcurl4-openssl-dev

# install php7.4 and all mods needed
RUN apt-get update && apt-get upgrade -y \
    && apt-get install -y \
                php7.4 \
                php7.4-opcache \
                libapache2-mod-php7.4 \
                php7.4-cli \
                php7.4-common \
                php7.4-curl \
                php7.4-gd \
                php7.4-json \
                php7.4-ldap \
                php7.4-mysql \
                php7.4-readline \
                php7.4-sqlite3 \
                php7.4-xml \
                php7.4-intl \
                php7.4-enchant \
                php7.4-imap \
                php7.4-mbstring

ADD opcache.ini "$PHP_INI_DIR/conf.d/opcache.ini"

# download zendto package install
RUN wget https://zend.to/files/zendto_${ZENDTO_VERSION}.deb
RUN gdebi -n zendto_${ZENDTO_VERSION}.deb

# push apache/php conf
COPY 000-default.conf /etc/apache2/sites-available/
COPY php.ini /etc/php/7.4/cli/
COPY php.ini /etc/php/7.4/apache2/
RUN a2ensite 000-default


# enable modules
RUN phpenmod -v ALL -s ALL curl
RUN phpenmod -v ALL -s ALL json
RUN phpenmod -v ALL -s ALL sqlite3
RUN phpenmod -v ALL -s ALL mysqli
RUN phpenmod -v ALL -s ALL mysqlnd
RUN phpenmod -v ALL -s ALL gd
RUN phpenmod -v ALL -s ALL ldap
RUN phpenmod -v ALL -s ALL pdo
RUN phpenmod -v ALL -s ALL readline
RUN phpenmod -v ALL -s ALL enchant
RUN phpenmod -v ALL -s ALL imap
RUN phpenmod -v ALL -s ALL intl
RUN phpenmod -v ALL -s ALL mbstring
RUN phpenmod -v ALL -s ALL opcache

RUN a2enmod php7.4
RUN a2enmod ssl
RUN a2enmod rewrite
RUN a2enmod headers


# download browscap module for php
RUN wget 'https://browscap.org/stream?q=PHP_BrowsCapINI' -O /opt/zendto/lib/browscap.ini
RUN chmod 775 /opt/zendto/lib/browscap.ini

# set up ldap.conf for correct TLS connexions
RUN echo 'TLS_REQCERT never' >> /etc/ldap/ldap.conf

# copy startup script
COPY startup /usr/local/bin/startup
RUN chmod +x /usr/local/bin/startup

VOLUME /var/zendto
VOLUME /opt/zendto/config

EXPOSE 80

CMD ["/usr/local/bin/startup"]
