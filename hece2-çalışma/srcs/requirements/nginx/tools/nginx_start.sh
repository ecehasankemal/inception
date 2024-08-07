#!/bin/bash

if [ ! -f /etc/ssl/certs/nginx.crt ]; then  #sertifikamız yoksa 
echo "Nginx: setting up ssl ...";
openssl req -x509 -nodes -days 365 -newkey rsa:4096 -keyout /etc/ssl/private/nginx.key -out /etc/ssl/certs/nginx.crt -subj "/C=$COUNTRY/ST=$STATE/L=$LOCALITY/O=$ORGANIZATION/CN=$WP_URL";
        #local için sertifika -x509    -nodes = şifresiz.     rsa:4096 şifreleme politikası.      -keyout = keyi verine adrese çıkart  -out = sertifikayı da verilen adrewse çıkart    geri kalanlarda env den aldıgım bilgiler
echo "Nginx: ssl is set up!";
fi

exec "$@"


#    ssl_protocols TLSv1.3;     tlsv.1.3 nedir arastır. 

#    fastcgı arastır. ngnix klasorunun conf klasorundeki default dosyası en alt yeri 