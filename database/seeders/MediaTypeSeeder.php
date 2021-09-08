<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Pionect\Daalder\Models\Media\Type;

class MediaTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Type::types() as $type) {
            Type::query()->updateOrInsert(['code' => str_slug($type)], ['name' => $type]);
        }
    }
}
