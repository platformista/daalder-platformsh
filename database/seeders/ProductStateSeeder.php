<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Pionect\Daalder\Models\Product\ProductState;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;

class ProductStateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_states')->insert([
            [
                'code' => ProductState::CONCEPT,
                'is_reserved' => '1',
                'sort_order' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => ProductState::VISIBLE,
                'is_reserved' => '1',
                'sort_order' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => ProductState::HIDDEN,
                'is_reserved' => '1',
                'sort_order' => '3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        $productStates = ProductState::get();

        $locale = App::getLocale();
        
        App::setLocale('nl');
        $productStates[0]->name = "CONCEPT";
        $productStates[1]->name = "ZICHTBAAR";
        $productStates[2]->name = "VERBORGEN";

        App::setLocale('en');
        $productStates[0]->name = "CONCEPT";
        $productStates[1]->name = "VISIBLE";
        $productStates[2]->name = "HIDDEN";

        foreach ($productStates as $productState) {
            $productState->save();
        }

        App::setLocale($locale);
    }
}
