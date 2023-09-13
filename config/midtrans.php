<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Midtrans API Keys
    |--------------------------------------------------------------------------
    |
    | This value is the API Keys of your midtrans API Keys. This value is set
    | in the env file
    | please create value in env file.
    |
    */

    'merchant_id' => env('MIDTRANS_MERCHANT_ID'),
    'client_key' => env('MIDTRANS_CLIENT_KEY'),
    'server_key' => env('MIDTRANS_SERVER_KEY'),

    'is_production' => env('MIDTRANS_IS_PRODUCTION', false),
    'is_sanitized' => false,
    'is_3ds' => false,

];
