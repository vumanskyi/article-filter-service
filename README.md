## Article filter service

##### Run project
```
docker-compose up
```

##### Install dependencies
```
docker-compose exec php-fpm composer install
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
