# docker-mz
docker mz

### php
> 7.4-fpm
docker run -d --name hub-mzphp mirze/php:latest

### compose 目录 
> lnmp (mirze/php:latest[php:7.4-fpm] + mariadb:10.10 + nginx:1.23.3-alpine + redis:7-alpine)  

docker-compose run -d  