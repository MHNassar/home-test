FROM nginx:1.19-alpine

WORKDIR /etc/nginx/conf.d/

# increase variables hash max size in nginx
RUN sed -i -e"s/^http\\s.$/http \{\n\tvariables_hash_max_size 1024;/" /etc/nginx/nginx.conf

WORKDIR /

CMD ["nginx", "-g", "daemon off;"]