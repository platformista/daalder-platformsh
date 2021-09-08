<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Pionect\Daalder\Models\Product\ProductSelection;

class AttributeSelectionPagesToCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (ProductSelection::all() as $productSelection) {
            if (is_null($productSelection->category_id)) {
                $productSelection->category_id = $productSelection->page_id;
                $productSelection->save();
            }
        }
    }
}
