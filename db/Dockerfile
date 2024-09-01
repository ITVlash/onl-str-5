FROM mysql:8.0

COPY init.sql /docker-entrypoint-initdb.d/init.sql

COPY custom.cnf /etc/mysql/conf.d/custom.cnf