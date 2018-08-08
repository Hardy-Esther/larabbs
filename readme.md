
接下来我们需要进行composer install来解决dependencies：

$ composer install

完成后，我们需要建立.env文件，因为.env默认是github所忽略的文件：

$ cp .env.example .env

因为env.example中默认没有app key，所以我们在.env中生成新的app key：

$ php artisan key:generate

修改env中数据库的配置保存后，运行数据库迁移文件

$ php artisan migrate

进行数据库迁移，运行数据库填充

$ php artisan db:seed

