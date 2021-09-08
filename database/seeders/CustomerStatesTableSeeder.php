<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Pionect\Daalder\Models\Customer\State;

class CustomerStatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (State::states() as $id => $name) {
            State::query()->updateOrInsert(['id' => $id], ['name' => $name]);
        }
    }
}
