## 从容器中拷贝文件到宿主机

查看宿主机文件位置

```
docker run --rm -it php:7.2-apache-stretch apachectl -S # 通过docker容器中的命令查看相关信息
```

拷贝容器数据

```bash
docker cp f6364e880b53:/etc/apache2/sites-available/000-default.conf docker/apache/apache.conf # 其中 f6364e880b53 为容器ID，可以通过 `docker ps` 查看得到

docker run --rm -it php:7.2-apache-stretch cat /etc/apache2/sites-enabled/000-default.conf > docker/apache/apache.conf # 将容器中的数据拷贝到本地
```

## 执行数据库迁移

```
docker-compose exec app php /srv/app/artisan migrate
```