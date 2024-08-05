FROM debian:buster

RUN apt-get update && apt-get -y install php7.3 php-mysqli php-fpm wget sendmail

EXPOSE 9000

COPY ./conf/www.conf /etc/php/7.3/fpm/pool.d
COPY ./tools /var/www/

ENV DB_NAME your_database_name
ENV DB_USER your_database_user
ENV DB_PASSWORD your_database_password
ENV DB_HOST your_database_host


RUN chmod +x /var/www/wordpress_start.sh

ENTRYPOINT [ "/var/www/wordpress_start.sh" ]

CMD ["/usr/sbin/php-fpm7.3", "--nodaemonize"]
