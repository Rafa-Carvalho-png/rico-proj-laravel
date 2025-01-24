## Demo

https://github.com/user-attachments/assets/a516c0c2-91a3-43b2-b937-299eb88e69e1

## Project Setup

#### Dependencies:

PHP ^8.1 / MySQL

#### Installation: 

```sh
composer install
```
#### Running: 
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

.env file content

```
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:BLKHRBWtTcaxpkntAFJ5cZuKd28gpIgVC6oQPePZsxM=
APP_DEBUG=true
APP_URL=http://localhost/api

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=pusher
CACHE_DRIVER=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=database
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=465
MAIL_USERNAME=rafaamorim1504@gmail.com
MAIL_PASSWORD=crsjduvrsogjmhdr
MAIL_ENCRYPTION=ssl
MAIL_FROM_ADDRESS="rafaamorim1504@gmail.com"
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID="1930832"
PUSHER_APP_KEY="03432b80dd09a95b9a39"
PUSHER_APP_SECRET="5e3a0944a13ceb53e902"
PUSHER_HOST=
PUSHER_PORT=443
PUSHER_SCHEME="https"
PUSHER_APP_CLUSTER="us2"

VITE_APP_NAME="${APP_NAME}"
VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
VITE_PUSHER_HOST="${PUSHER_HOST}"
VITE_PUSHER_PORT="${PUSHER_PORT}"
VITE_PUSHER_SCHEME="${PUSHER_SCHEME}"
VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

TWILIO_SID=AC20541477ac933193ebd78ed1a81bd616
TWILIO_AUTH_TOKEN=3abdeb36422d3bb1a943ba70a64178ab

JWT_SECRET=1C91pUqI4Wxec5ooi4TYjFldD1bAhmmnVayohfyQ0fV2ZrBtoVHXUO5WLWJ3C4Er
```
