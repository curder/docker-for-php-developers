## 构建镜像

```bash
docker build -t docker-laravel -f docker/Dockerfile .
```

## 启动镜像

```bash
docker run --rm -p 8080:80 docker-laravel
```

## MacOS电脑通过命令获取本机IP地址

```bash
ipconfig getifaddr en0 |pbcopy
```

## 拷贝配置文件

```
cp .docker.env.example .docker.env
```


如果是开发环境建议配置：

```
APP_ENV=local
PHP_OPCACHE_VALIDATE_TIMESTAMPS=1
PHP_XDEBUG_DEFAULT_ENABLE=1
```

线上环境配置：
```
APP_ENV=production
PHP_OPCACHE_VALIDATE_TIMESTAMPS=0
PHP_XDEBUG_DEFAULT_ENABLE=0
```

## 启动服务

```
docker-compose up -d --build
```

访问 `http://localhost:8080/procasts` redis将会处理一个 `ProcessPodcasts`事件，且在重试3次后失败，并记录到MySQL表中