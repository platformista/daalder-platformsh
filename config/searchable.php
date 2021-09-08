<?php

use Pionect\Daalder\Models\Brand\SearchResources\BrandSearchResource;
use Pionect\Daalder\Models\Customer\SearchResources\CustomerSearchResource;
use Pionect\Daalder\Models\OfferRequest\SearchResources\OfferRequestSearchResource;
use Pionect\Daalder\Models\Order\SearchResources\OrderSearchResource;
use Pionect\Daalder\Models\Product\SearchResources\ProductSearchResource;
use Pionect\Daalder\Models\Supplier\SearchResources\SupplierSearchResource;

return [

    /*
    |--------------------------------------------------------------------------
    | Searchable resources
    |--------------------------------------------------------------------------
    |
    */
    'resources' => [
        'brand' => BrandSearchResource::class,
        'customer' => CustomerSearchResource::class,
        'offer-request' => OfferRequestSearchResource::class,
        'order' => OrderSearchResource::class,
        'product' => ProductSearchResource::class,
        'supplier' => SupplierSearchResource::class,
    ]
];
