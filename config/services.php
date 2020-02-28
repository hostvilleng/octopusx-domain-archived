<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'github' => [
        'client_id' => env('GITHUB_CLIENT_ID'),
        'client_secret' => env('GITHUB_CLIENT_SECRET'),
        'redirect' => 'http://localhost:8001/authorize/callback',
    ],


    'octopux' =>[
        'client_id' => env('OCTOPUSX'),
        'client_secret' => env('OCTOPUSX_CLIENT_SECRET'),
         'redirect' => 'http://localhost:8001/authorize/callback',
    ]



];
