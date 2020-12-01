## 构建nginx镜像

```bash
docker build -t slim-nginx -f docker/nginx/Dockerfile .
```

## 构建php-fpm镜像

```bash
docker build -t slim-php -f docker/php/Dockerfile .
```

## 使用docker-composer管理项目

```bash
docker-compose up -d --build
```