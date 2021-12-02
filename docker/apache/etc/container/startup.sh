#!/usr/bin/env bash

# optimize config (caching routes and config).
if [[ -f "vendor/autoload.php" ]]; then
    php artisan optimize
fi

# include your extra logic before exec command.
