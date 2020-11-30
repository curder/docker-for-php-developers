## docker基础操作
### docker run

在容器中执行命令 `docker run`

```bash
docker run php:7.2-apache-stretch php --version
```

启动容器并给它命名 `--name`

```bash
docker run --name=testphp php:7.2-apache-stretch php --version
```

启动容器并在容器退出时删除它 `--rm`

```bash
docker run --rm php:7.2-apache-stretch php --version
```

进入到容器中 `-it`

```bash
docker run -it --rm phpinfo:latest bash
```

导出镜像里的端口

```bash
docker run -p 8080:80 --rm phpinfo:latest
```

在后台运行容器

```
docker run -p 8080:80 -d phpinfo
```

### docker stop

停运容器

```bash
docker stop c6692f893d6d # 通过容器ID

docekr stop testphp # 通过名称停运

docker stop $(docker ps -q) # 停止所有运行中的容器
```

## docker rm

删除停止运行的容器

```bash
docker rm c6692f893d6d # 通过容器ID删除

docker rm testphp # 通过名称删除

docker stop $(docker ps -aq) # 停止所有运行中的容器
```

### docker build

使用`docker build`可以构建自定义镜像，在构建镜像之前需要自定义`Dockerfile`文件。

```bash
docker build -t phpinfo:latest .

docker images |grep phpinfo # 查看刚刚构建标签为`phpinfo`的镜像
```