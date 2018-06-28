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

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
    'client_id'=> '188145178591051',         // Your Facebook Client ID
    'client_secret'=>'9610e35b483d70e09465456299f71c4a', // Your Facebook Client Secret
    'redirect' => 'http://localhost:8000/login/social/callback',
],

'google' => [
       'client_id'     => '103735244112-jp4p277nuhk2i9gcvm5vlans3cv9600e.apps.googleusercontent.com',
       'client_secret' => '37_ayREHh3SP9nNHeEnq0tQy',
       'redirect'      => 'http://localhost:8000/login/social/callback,'
   ]

];
