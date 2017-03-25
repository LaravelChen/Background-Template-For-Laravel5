# 后台模板(For Laravel5)

##  介绍
- 引用了AdminLTE的模板样式(https://github.com/almasaeed2010/AdminLTE)
- 整理这样一个模板的目的在于之后后台开发中省去布局和一些样式的步骤，提高效率.
- 整个模板我仅仅只是用路由进行跳转了各个页面，并没有实际上的连接数据库的过程，这样给使用者更大的创造空间.

## 效果图
![image](https://github.com/LaravelChen/Background-Template-For-Laravel5/raw/master/img/adminimg.png)

## 安装
#### 1.clone到本地
```
git clone https://github.com/LaravelChen/Background-Template-For-Laravel5.git
```
#### 2.根目录下创建.env文件
```
 php artisan key:generate  //生成key值
```

#### 3.安装依赖
```
composer install
```
> 恭喜您，安装成功！请熟悉整个布局过程，然后在此基础上开发吧！别吝啬您的star哦!!