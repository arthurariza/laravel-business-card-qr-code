# Website Demo Video

https://user-images.githubusercontent.com/37642667/228106919-9ff60d4b-a293-4300-9aff-391a339ff579.mov

# Demo YouTube Link

> https://www.youtube.com/watch?v=LYiQx_85fVU&ab_channel=ArthurAriza

# Docker Installation Guide

## Run

> docker-compose up -d —build

> cp .env.example .env

> docker-compose run --rm composer update --ignore-platform-req=ext-gd

> docker-compose run --rm npm install

> docker-compose run --rm npm run build

> docker-compose run --rm artisan key:generate

> docker-compose run --rm artisan migrate

### Visit http://localhost:80/

# Manual Installation Guide

## Run

> composer install

> npm install

> cp .env.example .env (Setup a database connection)

> php artisan key:generate

> php artisan migrate

> npm run build

### Serve The Website

> php artisan serve
