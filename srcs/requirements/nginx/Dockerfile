FROM alpine:3.16.3

# install nginx
RUN apk update && \
	apk add nginx && \
	apk add dumb-init && \
	apk add nginx openssl && \
	chmod +x /usr/bin/dumb-init && \
	mkdir -p /etc/nginx/ssl && \
	openssl	req -new -newkey rsa:4096 -x509 -sha256 -days 365 \
			-nodes -out /etc/nginx/ssl/nginx-ssl.crt \
			-keyout /etc/nginx/ssl/nginx-ssl.key \
			-subj "/C=KR/ST=Seoul/L=Gangnam-gu/O=42/OU=42Seoul/CN=sungjpar.42.fr"
#ln -sf /dev/stdout /var/log/nginx/access.log && \
#	ln -sf /dev/stderr /var/log/nginx/error.log

# copy nginx config file
COPY ./conf/default.conf "/etc/nginx/http.d/default.conf"

# will be use port:443
EXPOSE 443

# health check for nginx
# HEALTHCHECK --interval=10s --timeout=3s CMD curl -f -k https://127.0.0.1/ || exit 1

ENTRYPOINT  ["/usr/bin/dumb-init", "--"]

CMD ["nginx", "-g", "daemon off;"]
