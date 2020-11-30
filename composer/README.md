## composer


```
docker build -t composer:latest -f docker/Dockerfile .
```

## 将私有仓库依赖添加到项目

在 [GitHub Person access tokens](https://github.com/settings/tokens) 处生成一个包含仓库操作权限的密钥，将当前项目下的文件 `auth.dist.json` 拷贝为：`auth.json`，并将GitHub生成的密钥替换文件里的`%access-token%`内容。

重新构建composer则可以看到私有依赖被下载到项目里。