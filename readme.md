#### 环境要求

PHP >= 7.1.3  
PHP 拓展 : OpenSSL PDO Mbstring Tokenizer XML Ctype JSON BCMath fileinfo
Mysql >= 5.7.7

#### 第一次配置步骤

1.Git clone到本地  
2.安装Composer，并执行`composer config -g repo.packagist composer https://packagist.laravel-china.org`   
3.`composer install`      
4.将.env.example 复制为.env，并在里面修改DB部分字段（数据库，用户名密码）   
5.`php artisan key:generate` (在目录下运行)    
6.`php artisan storage:link`   
7.配置目录权限。 /storage 和 /bootstrap/cache 目录在你的 web 服务下应该是可写的权限  (`sudo chmod -R 777 /storage`)      
8.`php artisan migrate`  运行迁移   
9.使用OAuth认证，生成passport的密钥   
`php artisan passport:key --force`   
`php artisan passport:install --force`   
10.复制第4步生成的密钥到.env文件中，填写为PERSONAL_CLIENT_SECRET和PASSPORT_CLIENT_SECRET的参数   
PERSONAL_CLIENT_ID=1   
PERSONAL_CLIENT_SECRET=   
PASSPORT_CLIENT_ID=2   
PASSPORT_CLIENT_SECRET=   

11.`php artisan db:seed` 生成测试数据，必要情况使用    

#### 每次拉取服务启动

运行迁移: `php artisan migrate`    
(测试)生成测试用户数据，必要情况使用: `php artisan db:seed`     
本地服务: `php artisan serve --host=127.0.0.1 --port=3000`    
持久化: nginx配置服务 指向/public/index.php  


#### 线上测试环境部署

1.APP_ENV改为staging   
2.`composer install --optimize-autoloader --no-dev` 优化自定加载映射 
3.`php artisan config:cache` 优化配置加载   
 
#### 线上生产环境部署

1.APP_ENV改为production    
2.`composer install --optimize-autoloader --no-dev` 优化自定加载映射 
3.`php artisan config:cache` 优化配置加载
4.APP_DEBUG改为false  

### 链接

- [Laravel5.8 Docs](https://learnku.com/docs/laravel/5.8)

### License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
