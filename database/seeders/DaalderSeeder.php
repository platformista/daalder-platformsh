<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DaalderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AttributeSelectionPagesToCategoriesSeeder::class);

        $this->call(DiscountTypeTableSeeder::class);
        $this->call(OrderStateSeeder::class);
        $this->call(MediaTypeSeeder::class);
        $this->call(MediaTagsSeeder::class);
        $this->call(ProductAttributeGroupSeeder::class);
        $this->call(RatingTableSeeder::class);
        $this->call(ReviewStateTableSeeder::class);
        $this->call(StoreSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(AssignPermissionsToRolesSeeder::class);
        $this->call(PriceRuleTypesTableSeeder::class);
        $this->call(PriceListTypesTableSeeder::class);
        $this->call(VatRateTransactionTypesTableSeeder::class);
        $this->call(VatRateTypesTableSeeder::class);
        $this->call(CurrencyTableSeeder::class);
        $this->call(CountryTableSeeder::class);
        $this->call(LanguageTableSeeder::class);
        $this->call(ProductTypeTableSeeder::class);
        $this->call(CustomerStatesTableSeeder::class);
        $this->call(PriceTypeTableSeeder::class);
    }
}
