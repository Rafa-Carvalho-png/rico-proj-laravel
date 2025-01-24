## Project Setup

Dependencies:

PHP ^8.1 / MySQL


```sh
composer install
```

```sh
php artisan migrate
php artisan serve
php artisan queue:work
```

In case of trouble with JWT secret
```sh
php artisan jwt:secret
```

In case of trouble with Laravel app key
```sh
php artisan key:generate
```
