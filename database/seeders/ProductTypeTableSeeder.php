<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Pionect\Daalder\Models\Product\Type;

class ProductTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @param \Pionect\Daalder\Models\Product\Type $type
     * @return void
     */
    public function run(Type $type)
    {
        foreach ($type->types() as $id => $name) {
            $type->query()->updateOrInsert(['id' => $id], ['name' => $name]);
        }
    }
}
