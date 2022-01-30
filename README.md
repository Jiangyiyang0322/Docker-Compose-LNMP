# Docker-Compose本地一键部署LNMP开发环境
本仓库代码使用docker-compose本地环境中一键自动化部署Nginx、Php、Mysql应用

##
Nginx镜像版本：nginx:1.16.0

Php版本：7.39，仓库代码中的myphp镜像由我自己进行了封装，主要安装了php的mysqli模块，可直接pull使用

Mysql版本：mysql:5.7，mysql的volume存储卷docker会自动创建
