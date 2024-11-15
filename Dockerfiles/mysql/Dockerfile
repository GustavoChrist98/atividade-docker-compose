FROM mysql:5.7

ENV MYSQL_ROOT_PASSWORD=dev
ENV MYSQL_DATABASE=dev
ENV MYSQL_USER=dev
ENV MYSQL_PASSWORD=dev

RUN chown -R mysql:root /var/lib/mysql/

COPY ./employees-table/employees.sql /etc/mysql/data.sql

EXPOSE 3306