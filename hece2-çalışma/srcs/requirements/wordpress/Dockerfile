FROM debian:bullseye

RUN apt-get update && apt-get install -y \
    php-fpm \
    php-mysql \
    sendmail \
    wget && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/* 

RUN wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar \
    && chmod +x wp-cli.phar \
    && mv wp-cli.phar /usr/local/bin/wp-cli

EXPOSE 9000

COPY ./conf/www.conf /etc/php/7.4/fpm/pool.d/

COPY ./tools/wordpress_create.sh /tmp/

RUN chmod +x /tmp/wordpress_create.sh

ENTRYPOINT [ "/tmp/wordpress_create.sh" ]

CMD [ "/usr/sbin/php-fpm7.4", "--nodaemonize" ]
