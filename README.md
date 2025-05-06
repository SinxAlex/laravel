# Тестовое задание 
![Laravel](https://img.shields.io/badge/Laravel-v8.0-orange?style=flat-square)
![PostgreSQL](https://img.shields.io/badge/PostgreSQL-v13.0-blue?style=flat-square)
![MVC](https://img.shields.io/badge/Architecture-MVC-green?style=flat-square)


## Инструкции по развертыванию проекта Laravel в Docker
Сборка проекта
```
    docker-compose up --build
```

Запуск миграции
```
    docker exec -it laravel_app php artisan migrate
```

Запуск сидов
```
    docker exec -it laravel_app php artisan db:seed
```
