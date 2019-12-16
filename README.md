# Laravel_BanHang_2
 https://www.youtube.com/watch?v=HY7M7PuyP1Q&list=PLzrVYRai0riS_Y2L0Ox_gUL9UjPDL8p2i&index=2&t=0s

1. Create new Laravel project: 

- composer create-project --prefer-dist laravel/laravel project-name

- config/app.php -> 'timezone' => 'Asian/Ho_Chi_Minh'

- .env -> config your db info

- config/database -> config your db info

2. Clone Laravel Project from Github.

- Clone product from github

- Go to the folder application using cd command on your cmd or terminal, Run composer install on your cmd or terminal. 

- Copy .env.example file to .env on the root folder. You can type copy .env.example .env if using command prompt Windows or cp .env.example .env if using terminal, Ubuntu.

- Open your .env file -> config your db info

- Run: php artisan key:generate

- Run: php artisan migrate

- Run: php artisan serve

- Go to localhost:8000

3. Generate model from exist database

https://github.com/krlove/eloquent-model-generator

If you get this error "mkdir(): Invalid path" -> try php artisan config:clear -> do step 4 This package will scan your database and create all models for you. If you need something more specific, you can customize its config file.

This project using Redis for cache

https://stackoverflow.com/questions/51908004/install-phpredis-mac-osx

Install Redis : brew install redis

Start Redis server : redis-server /usr/local/etc/redis.conf
