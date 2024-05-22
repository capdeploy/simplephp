FROM debian:bookworm

WORKDIR /app

RUN apt-get update && apt-get upgrade -y
RUN apt-get install procps vim gnupg2 wget apt-transport-https lsb-release ca-certificates gnutls-bin dnsutils mariadb-client -y


RUN wget -qO - /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg | apt-key add -
RUN apt-get update
RUN apt-get install php8.2 php8.2-mysql php8.2-common php-fpm nginx  -y

COPY etc/php/8.2/fpm/pool.d/www.conf /etc/php/8.2/fpm/pool.d/www.conf

COPY etc/nginx/conf.d/php-app.conf /etc/nginx/conf.d/php-app.conf
RUN rm -f /etc/nginx/sites-enabled/default

COPY *.php /app
COPY *.html /app/
RUN chown -R www-data:www-data /app/*

CMD /usr/sbin/php-fpm8.2 & \
/usr/sbin/nginx -c /etc/nginx/nginx.conf -g "daemon off;"

EXPOSE 80