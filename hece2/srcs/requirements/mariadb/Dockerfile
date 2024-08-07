FROM debian:bullseye

RUN apt-get update && \
    apt-get install -y mariadb-server && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

EXPOSE 3306

COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/

COPY ./tools/create_mariadb.sh /tmp/

RUN chmod +x /tmp/create_mariadb.sh

ENTRYPOINT [ "/tmp/create_mariadb.sh" ]

CMD [ "mariadbd" ]