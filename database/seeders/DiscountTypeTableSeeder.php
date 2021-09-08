<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Pionect\Daalder\Models\Discount\DiscountType;

class DiscountTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DiscountType::firstOrCreate([
            'name' => 'percentage'
        ]);

        DiscountType::firstOrCreate([
            'name' => 'amount'
        ]);
    }
}
