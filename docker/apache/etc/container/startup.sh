#!/usr/bin/env bash

# optimize config (caching routes and config on production env).
if [[ ${APP_ENV:-local} = "production" ]]; then
    php artisan optimize
fi

# include your extra logic before exec command.
