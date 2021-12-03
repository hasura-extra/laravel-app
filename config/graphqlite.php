<?php

use GraphQL\Error\DebugFlag;

return [
    /*
     |--------------------------------------------------------------------------
     | GraphQLite Configuration
     |--------------------------------------------------------------------------
     |
     | Use this configuration to customize the namespace of the controllers and
     | types.
     | These namespaces must be autoloadable from Composer.
     | GraphQLite will find the path of the files based on composer.json settings.
     |
     | You can put a single namespace, or an array of namespaces.
     |
     */
    'controllers' => 'App\\Http\\GraphQL',
    'types' => 'App\\Http\\GraphQL',
    'debug' => env('APP_ENV') === 'production' ? DebugFlag::RETHROW_UNSAFE_EXCEPTIONS : DebugFlag::INCLUDE_DEBUG_MESSAGE | DebugFlag::INCLUDE_TRACE,
    'uri' => '/graphql',
    'middleware' =>  [],
];
