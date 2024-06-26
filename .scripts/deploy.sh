#!/bin/bash
set -e

echo "Deployment started ..."

# Pull the latest version of the app
git pull origin main

# Install composer dependencies
composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader

# Install npm dependencies
npm install -y --silent

# Recreate cache
php artisan optimize:clear
php artisan optimize

# Compile npm assets
npm run build

# Run database migrations
echo "Running the migrations"
php artisan migrate --force

echo "Deployment finished!"
