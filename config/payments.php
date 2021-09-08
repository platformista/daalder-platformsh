<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Payment provider
    |--------------------------------------------------------------------------
    |
    | Path to payment provider class for example:
    | \App\Services\Payment\Stripe\PaymentProvider
    |
    */
    'provider' => env('PAYMENT_PROVIDER'),

    /*
    |--------------------------------------------------------------------------
    | Payment test mode
    |--------------------------------------------------------------------------
    |
    | Flag to put payments in test mode or production.
    |
    */
    'test_mode' => env('PAYMENT_TEST_MODE', true),

    /*
    |--------------------------------------------------------------------------
    | Payment currency
    |--------------------------------------------------------------------------
    |
    | The currency that the payment should take place in.
    |
    */
    'currency' => env('PAYMENT_CURRENCY', 'EUR')
];
