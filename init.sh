#!/bin/bash
set -e

cd /var/www

# Если .env не существует, создаем его
if [ ! -f .env ]; then
    cat > .env <<EOF
APP_KEY=
DB_CONNECTION=pgsql
DB_HOST=db
DB_PORT=5432
DB_DATABASE=laravel
DB_USERNAME=laravel
DB_PASSWORD=secret
EOF
fi
exec "$@"
