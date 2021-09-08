<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Pionect\Daalder\Models\Order\State;

class OrderStateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (State::states() as $index => $code) {
            /** @var State $state */
            $state = State::query()->firstOrCreate(['code' => $code], [
                'reserved' => 1,
                'order' => ($index + 1)
            ]);

            $state->name = $code;
            $state->save();
        }
    }
}
