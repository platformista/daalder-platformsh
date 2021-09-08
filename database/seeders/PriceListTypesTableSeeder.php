<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Pionect\Daalder\Models\Price\PriceListType;

class PriceListTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (PriceListType::types() as $id => $name) {
            PriceListType::query()->updateOrInsert(['id' => $id], ['name' => $name]);
        }
    }
}
