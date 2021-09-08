<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Pionect\Daalder\Models\VatRate\Type;

class VatRateTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Type::types() as $id => $name) {
            Type::query()->updateOrInsert(['id' => $id], ['name' => $name]);
        }
    }
}
