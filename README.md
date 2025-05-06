# Тестовое задание 
[![Laravel](https://img.shields.io/badge/Laravel-v10-FF2D20?style=flat-square&logo=laravel)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.1%2B-777BB4?style=flat-square&logo=php)](https://php.net)
[![PostgreSQL](https://img.shields.io/badge/PostgreSQL-13%2B-4169E1?style=flat-square&logo=postgresql)](https://www.postgresql.org)
[![Docker](https://img.shields.io/badge/Docker-✓-2496ED?style=flat-square&logo=docker)](https://www.docker.com)

## Инструкции по развертыванию проекта Laravel в Docker
Сборка проекта
```
    docker-compose up --build
```

Запуск миграции:
```
    docker exec -it laravel_app php artisan migrate
```

Запуск сидов:
```
    docker exec -it laravel_app php artisan db:seed
```

### Учетные записи по умолчанию

**Администратор:**
- Email: `test@example.com`
- Пароль: `123456`
- Права: Полный доступ : добавление, редактирование, просмотр, удаление

**Конструктор:**
- Email: `contractor@example.com`
- Пароль: `contractor123`
- Права: только  просмотр
