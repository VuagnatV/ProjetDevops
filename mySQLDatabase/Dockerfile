FROM mysql
#COPY ./index.html /usr/share/nginx/html/index.html
ENV MYSQL_ROOT_PASSWORD vincent
ADD mysqlsampledatabase.sql /docker-entrypoint-initdb.d
EXPOSE 3306
