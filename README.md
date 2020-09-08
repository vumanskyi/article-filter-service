## Article filter service

##### Run project
```
docker-compose up
```
##### Copy .env
```
docker-compose exec php-fpm cp .env.example .env
```

##### Install dependencies
```
docker-compose exec php-fpm composer install
```

##### Generate app key
```
docker-compose exec php-fpm php artisan key:generate
```

##### Migrate db
```
docker-compose exec php-fpm php artisan migrate
```

##### Seeds data
```
docker-compose exec php-fpm php artisan db:seed
```

#### And finally open the link

http://localhost/
