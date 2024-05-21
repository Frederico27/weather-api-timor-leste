#!/usr/bin/env bash
echo "Running composer"
composer install --no-dev --working-dir=/var/www/html

echo "Caching config..."
php artisan config:cache

echo "Caching routes..."
php artisan route:cache

echo "Running migrations..."
php artisan migrate --force

echo "publish swagger"
php artisan vendor:publish --provider "L5Swagger\L5SwaggerServiceProvider"

echo "generate swagger"
php artisan l5-swagger:generate
