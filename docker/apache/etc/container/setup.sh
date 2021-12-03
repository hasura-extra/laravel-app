#!/usr/bin/env bash
set -e

sudo chmod +x ./artisan

# Remote optimize caching files on local env
rm -f bootstrap/cache/*.php

composer install --prefer-dist --no-progress --no-interaction

# Initial project
if [ ! -f ".env" ]; then
    composer run-script post-root-package-install
    composer run-script post-create-project-cmd
fi

if ls -A database/migrations/*.php >/dev/null 2>&1; then
  echo "Migrating & seeding database..."
  php artisan migrate --seed --no-interaction
fi

if ls -A hasura/metadata/*.yaml >/dev/null 2>&1; then
  echo "Applying Hasura metadata..."
  php artisan hasura:metadata:reload
  php artisan hasura:metadata:apply
fi

exit 0
