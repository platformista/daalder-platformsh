#!/usr/bin/env bash

if [ -d "vendor" ]; then
  php artisan package:discover --ansi
  php artisan migrate --force
  if ! [ -f "storage/auth-clients.txt" ]; then
    php artisan db:seed --class="DaalderSeeder" --force
    php artisan elastic:sync
    php artisan passport:install --force > storage/auth-clients.txt
    php artisan user:super-user --firstname=Admin --email=your@email.com >> storage/auth-clients.txt
    php artisan vendor:publish --tag="public"
  else
    if [ "$PLATFORM_ENVIRONMENT_TYPE" != "production" ]; then
      php artisan passport:purge
      php artisan passport:install --force > storage/auth-clients.txt
      php artisan user:super-user --firstname=Admin --email=your@email.com >> storage/auth-clients.txt
    fi
  fi
  php artisan config:clear
  php artisan cache:clear
fi
