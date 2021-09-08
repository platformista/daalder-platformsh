<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Pionect\Daalder\Models\Unit\Type;

class UnitTypesTableSeeder extends Seeder
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
