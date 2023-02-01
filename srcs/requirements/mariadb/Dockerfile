# second latest mariadb dokcer image
FROM debian:stable
# add user and group
RUN groupadd -r mysql && useradd -r -g mysql mysql
#install mariadb
RUN apt-get update && \
	apt-get -y install curl && \
	apt-get -y install apt-transport-https curl && \
	curl -o /etc/apt/trusted.gpg.d/mariadb_release_signing_key.asc 'https://mariadb.org/mariadb_release_signing_key.asc' && \
	sh -c "echo 'deb https://tw1.mirror.blendbyte.net/mariadb/repo/10.9/debian bullseye main' >>/etc/apt/sources.list"&& \
	apt-get update && \
	apt-get install -y mariadb-server && \
	mkdir -p /run/mysqld /var/lib/mysql && \
    chown -R mysql:mysql /var/lib/mysql /run/mysqld && \
	apt-get install -y dumb-init && \
	chmod +x /usr/bin/dumb-init


COPY ./conf/init.sql /data/application/init.sql
COPY ./conf/my.conf /etc/mysql/my.conf
COPY ./tools/docker-entrypoint.sh /usr/bin/docker-entrypoint.sh
RUN chmod +x /usr/bin/docker-entrypoint.sh

EXPOSE 3306

ENTRYPOINT  ["/usr/bin/dumb-init", "--"]

CMD ["sh", "-c","/usr/bin/docker-entrypoint.sh"]

#CMD ["mysqld", "--defaults-file=/etc/mysql/conf.d", "--init-file=/data/application/init.sql"]
#CMD ["mariadbd]
