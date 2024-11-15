FROM mysql:5.7

ENV MYSQL_ROOT_PASSWORD=dev
ENV MYSQL_DATABASE=dev

RUN chown -R mysql:root /var/lib/mysql/

COPY ./employees-table/employees.sql /etc/mysql/data.sql
RUN sed -i 's/MYSQL_DATABASE/'$MYSQL_DATABASE'/g' /etc/mysql/data.sql && \
cp /etc/mysql/data.sql /docker-entrypoint-initdb.d

EXPOSE 3306