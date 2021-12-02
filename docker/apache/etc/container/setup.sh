#!/usr/bin/env bash
set -e

sudo chmod +x ./artisan

# Remote optimize caching files on local env
rm -f bootstrap/cache/*.php

composer install --prefer-dist --no-progress --no-interaction
composer run-script post-root-package-install

if ls -A database/migrations/*.php >/dev/null 2>&1; then
  echo "Migrating & seeding database..."
  php artisan migrate --no-interaction
  php artisan db:seed
fi

if ls -A hasura/metadata/*.yaml >/dev/null 2>&1; then
  echo "Applying Hasura metadata..."
  php artisan hasura:metadata:reload
  php artisan hasura:metadata:apply
fi

exit 0
