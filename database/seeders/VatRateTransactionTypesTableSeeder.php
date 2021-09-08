<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Pionect\Daalder\Models\VatRate\TransactionType;

class VatRateTransactionTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (TransactionType::types() as $id => $name) {
            TransactionType::query()->updateOrInsert(['id' => $id], ['name' => $name]);
        }
    }
}
