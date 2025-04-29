<?php

return [

    'defaults' => [
        'guard' => 'register',  // Default authentication guard
        'passwords' => 'register',
    ],

    'guards' => [
        'employee' => [
            'driver' => 'session',
            'provider' => 'employee',
        ],
        'register' => [
            'driver' => 'session',
            'provider' => 'register',  // 'register' should match the provider name
        ],
    ],

    'providers' => [
        'employee' => [
            'driver' => 'eloquent',
            'model' => App\Models\Employee::class,
        ],
        'register' => [
            'driver' => 'eloquent',
            'model' => App\Models\Register::class,
        ],
    ],
'passwords' => [
    'employee' => [
        'provider' => 'employee',
        'table' => 'password_resets',
        'expire' => 60,
        'throttle' => 60,
    ],

    'register' => [ // 👈 ADD THIS
        'provider' => 'register',
        'table' => 'password_resets', // use same table or create another if needed
        'expire' => 60,
        'throttle' => 60,
    ],
],
];