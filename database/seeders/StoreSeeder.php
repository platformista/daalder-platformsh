<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Pionect\Daalder\Models\Store\Store;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Store::firstOrCreate([
            'code' => 'demo',
            'prices_excluding_tax' => 0,
            'domain' => 'bar.com',
            'currency_code' => 'EUR'
        ]);
    }
}
