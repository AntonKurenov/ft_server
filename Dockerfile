FROM debian:buster

WORKDIR /server_srcs

RUN apt update && \
	apt upgrade && \
	apt install -y nginx && \
	apt install -y vim && \
	apt install -y mariadb-server && \
	apt install -y php-fpm php-mysql && \
	apt install -y wget && \
	apt install -y openssl && \
	apt install -y php7.3-fpm php7.3-common php7.3-mysql \
	php7.3-gmp php7.3-curl php7.3-intl php7.3-mbstring \
	php7.3-xmlrpc php7.3-gd php7.3-xml php7.3-cli php7.3-zip php7.3-soap \
	php7.3-imap

COPY ./srcs/index_on.sh .
COPY ./srcs/index_off.sh .
COPY ./srcs/default_index_on .
COPY ./srcs/default_index_off .
COPY ./srcs/init_db.sql .
COPY ./srcs/nginx-selfsigned.crt /etc/nginx/ssl/
COPY ./srcs/nginx-selfsigned.key /etc/nginx/ssl/
COPY ./srcs/start_server.sh .
COPY ./srcs/phpmyadmin.inc.php .
COPY ./srcs/wp-config.php .

RUN service mysql start && mysql < init_db.sql

EXPOSE 80 443

CMD bash start_server.sh
