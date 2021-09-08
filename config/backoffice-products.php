<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Pushable rules
    |--------------------------------------------------------------------------
    |
    | Here you can set one or many classes that will handle whether a product should be pushable.
    | You can create your own class by extending the following one and implementing the `handle` method:
    |     - \Pionect\Daalder\Models\Product\Rules\PushableRule::class
    |
    | Backoffice provide some default Pushable Rules, `AlwaysPushableRule` and `NeverPushableRule`.
    | The first one will always set the product as pushable, the last one though, will not.
    |
    | Note: The product will be able to be published only if it passes in `all` Pushable Rules.
    */

    'pushable-rules' => [
        \Pionect\Daalder\Models\Product\Rules\AlwaysPushableRule::class,
    ],
];
