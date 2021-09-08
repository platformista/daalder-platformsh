<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Pionect\Daalder\Models\Review\Rating;

class RatingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Rating::types() as $id => $rating) {
            Rating::query()->updateOrInsert(['id' => $id], ['name' => $rating]);
        }
    }
}
