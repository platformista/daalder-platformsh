<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Seeder;
use Pionect\Daalder\Models\VatRate\TransactionType;
use Pionect\Daalder\Models\VatRate\Type;
use Pionect\Daalder\Models\VatRate\VatRate;

class VatRateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vatRateOne = [
            'name' => 'BTW Hoog',
            'percentage' => '21',
            'type_id' => Type::INCLUDING,
            'transaction_type_id' => TransactionType::BOTH,
            'is_preferred' => 1,
        ];

        $vatRateTwo = [
            'name' => 'BTW Laag',
            'percentage' => '6',
            'type_id' => Type::INCLUDING,
            'transaction_type_id' => TransactionType::BOTH,
            'is_preferred' => 0
        ];

        // Circumvent a migration issue where country_code column and countries table don't exist yet and this
        // seeder is called
        if(Schema::hasColumn(VatRate::table(), 'country_code')) {
            $vatRateOne['country_code'] = 'NL';
            $vatRateTwo['country_code'] = 'NL';
        }

        VatRate::firstOrCreate($vatRateOne);
        VatRate::firstOrCreate($vatRateTwo);
    }
}
