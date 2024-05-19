#!/bin/bash
set -e

echo "Deployment started ..."

# Pull the latest version of the app
git pull origin main

# Install composer dependencies
echo "Installing the composer dependencies"
composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader --quiet

# Install npm dependencies
echo "Installing the npm dependencies"
npm install -y --silent

# Recreate cache
echo "Optimizing the cache"
php artisan optimize

# Compile npm assets
echo "Compilling the npm assets"
npm run build

# Run database migrations
echo "Running the migrations"
php artisan migrate --force

echo "Deployment finished!"
