<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Pionect\Daalder\Models\Price\RuleType;

class PriceRuleTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (RuleType::types() as $id => $name) {
            RuleType::query()->updateOrInsert(['id' => $id], ['name' => $name]);
        }
    }
}
