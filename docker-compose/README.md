## docker-compose

构建服务

```bash
docker-compose up

docker-compose up -d # 在后台运行镜像
docker-composer up --build # 在启动之前构建镜像
```

停止容器

```bash
docker-compose stop
```

启动容器
```bash
docker-composer start
```

删除停止运行的镜像

```bash
docker-compose rm -f
```

重启容器

```bash
docker-compose restart phpinfo # 根据名称重启容器

docker-compose restart # 重启当前所有compose中定义的服务
```

停止并删除运行中的容器，网络和磁盘映射关系

```bash
docker-compose down
```