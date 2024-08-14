## Laravel 11 multi auth system

Laravel multi auth boilerplate (user, admin, teacher)

- config/auth.php
- database/migrations/admin, teacher
- app/Http/Controllers/Admin, Teacher
- app/Http/Requests/Admin, Teacher
- app/Models/Admin, Teacher
- app/View/Components/Admin, Teacher
- routes/auth-admin, auth-teacher
- resources/views/admin, teacher

## Sail installation

### install and start
```shell
# step 1 : create laravel project
composer create-porject laravel/laravel laravel11-multi-auth-system

# step 2 : add composer sail package
composer require laravel/sail --dev

# step 3 : install sail
php artisan sail:install
# checked - mariadb, redis

# step 4 : sail start
./vendor/bin/sail up
```

### shell settings
```shell
# bash or sh
export PATH="$PATH:$HOME/.composer/vender/bin"

alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'
```

### start sail
```shell
sail up -d

sail artisan migrate
```
