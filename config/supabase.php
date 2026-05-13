<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Supabase Configuration
    |--------------------------------------------------------------------------
    |
    | Configure your Supabase project credentials here.
    | All values are read from the .env file.
    | Leave as null until you're ready to connect.
    |
    */

    'url'              => env('SUPABASE_URL', null),
    'anon_key'         => env('SUPABASE_ANON_KEY', null),
    'service_role_key' => env('SUPABASE_SERVICE_ROLE_KEY', null),

    /*
    |--------------------------------------------------------------------------
    | API Endpoints
    |--------------------------------------------------------------------------
    */
    'endpoints' => [
        'rest'    => '/rest/v1',
        'auth'    => '/auth/v1',
        'storage' => '/storage/v1',
        'realtime'=> '/realtime/v1',
    ],

    /*
    |--------------------------------------------------------------------------
    | HTTP Options
    |--------------------------------------------------------------------------
    */
    'timeout' => 30,
    'retry'   => 3,

];
