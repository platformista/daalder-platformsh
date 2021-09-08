<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;
use Pionect\Daalder\Models\Price\PriceType;

class PriceTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PriceType::create(['type' => PriceType::FIXED]);
//        PriceType::create(['type' => PriceType::TIER]);
    }
}
