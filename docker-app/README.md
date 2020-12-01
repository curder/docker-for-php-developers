## 构建镜像

```bash
docker build -t docker-laravel -f docker/Dockerfile .
```

## 启动镜像

```bash
docker run --rm -p 8080:80 docker-laravel
```