FROM debian:bullseye

RUN apt-get update && apt-get install -y \
    nginx \
    openssl && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

EXPOSE 443

COPY ./conf/default /etc/nginx/sites-enabled/default
COPY ./tools/nginx_start.sh /tmp/

RUN chmod +x /tmp/nginx_start.sh

ENTRYPOINT ["/tmp/nginx_start.sh"]

CMD ["nginx", "-g", "daemon off;"]