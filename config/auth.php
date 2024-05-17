<?php


return [

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'restaurants',
    ],

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'restaurants', // Update to use the 'restaurants' provider
        ],
    ],

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\Restaurant2::class,
        ],

        'restaurants' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class, // Replace with your actual model
        ],
    ],

    'passwords' => [
        'restaurants' => [
            'provider' => 'restaurants',
            'table' => 'password_reset_tokens',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    'password_timeout' => 10800,

];
