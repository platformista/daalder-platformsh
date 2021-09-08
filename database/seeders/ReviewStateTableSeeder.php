<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Pionect\Daalder\Models\Review\State;

class ReviewStateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (State::states() as $id => $state) {
            State::query()->updateOrInsert(['id' => $id], ['name' => $state]);
        }
    }
}
