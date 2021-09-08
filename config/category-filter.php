<?php

use Pionect\Daalder\Services\Shipping\ShippingTimesFetcher;
use Pionect\Daalder\Services\Shipping\ShippingTiersFetcher;


return [

    /*
    |--------------------------------------------------------------------------
    | Properties to be used as filters
    |--------------------------------------------------------------------------
    |
    */
    'customproperties' => [
        'id' => 1,
        'name' => 'Custom Eigenschappen',
        'properties' => [
            'shipping_time_id' => [
                'name' => 'Leveringtijd',
                'options_fetcher' => ShippingTimesFetcher::class,
                'options' => [],
                'inputtype' => 'select'
            ],
            'shipping_tier_id' => [
                'name' => 'Leveringniveau',
                'options_fetcher' => ShippingTiersFetcher::class,
                'options' => [],
                'inputtype' => 'select'
            ],
        ]
    ]
];
