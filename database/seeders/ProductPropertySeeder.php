<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Pionect\Daalder\Models\ProductAttribute\Group;
use Pionect\Daalder\Models\ProductAttribute\ProductAttribute;

class ProductPropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $generalGroup = Group::where('name', '=', 'General')->first();
        $metaGroup = Group::where('name', '=', 'Meta informatie')->first();

        $attribute = ProductAttribute::firstOrCreate([
            'productattributegroup_id' => $generalGroup->id,
            'code' => 'name',
            'inputtype' => 'string',
            'searchable' => '1',
            'is_global' => 1
        ]);
        $attribute->translateOrNew('en')->name = 'Name';
        $attribute->save();

        $property = $attribute->productproperties()->first();
        $property->required = 1;
        $property->save();

        $attribute = ProductAttribute::firstOrCreate([
            'productattributegroup_id' => $generalGroup->id,
            'code' => 'url',
            'inputtype' => 'string',
            'searchable' => '1',
            'is_global' => 1
        ]);
        $attribute->translateOrNew('en')->name = 'URL';
        $attribute->save();

        $attribute = ProductAttribute::firstOrCreate([
            'productattributegroup_id' => $generalGroup->id,
            'code' => 'description',
            'inputtype' => 'text',
            'searchable' => '1',
            'is_global' => 1
        ]);
        $attribute->translateOrNew('en')->name = 'Description';
        $attribute->save();

        $property = $attribute->productproperties()->first();
        $property->required = 1;
        $property->save();

        $attribute = ProductAttribute::firstOrCreate([
            'productattributegroup_id' => $generalGroup->id,
            'code' => 'short-description',
            'inputtype' => 'text',
            'searchable' => '1',
            'is_global' => 1
        ]);
        $attribute->translateOrNew('en')->name = 'Short description';
        $attribute->save();

        $attribute = ProductAttribute::firstOrCreate([
            'productattributegroup_id' => $metaGroup->id,
            'code' => 'meta-title',
            'inputtype' => 'string',
            'searchable' => '1',
            'is_global' => 1
        ]);
        $attribute->translateOrNew('en')->name = 'Meta title';
        $attribute->save();

        $attribute = ProductAttribute::firstOrCreate([
            'productattributegroup_id' => $metaGroup->id,
            'code' => 'meta-description',
            'inputtype' => 'string',
            'searchable' => '1',
            'is_global' => 1
        ]);
        $attribute->translateOrNew('en')->name = 'Meta description';
        $attribute->save();

        $attribute = ProductAttribute::firstOrCreate([
            'productattributegroup_id' => $metaGroup->id,
            'code' => 'meta-keywords',
            'inputtype' => 'string',
            'searchable' => '1',
            'is_global' => 1
        ]);
        $attribute->translateOrNew('en')->name = 'Meta keywords';
        $attribute->save();

        $attribute = ProductAttribute::firstOrCreate([
            'productattributegroup_id' => $metaGroup->id,
            'code' => 'search-aliases',
            'inputtype' => 'string',
            'searchable' => '1',
            'is_global' => 1
        ]);
        $attribute->translateOrNew('en')->name = 'Search aliases';
        $attribute->save();

    }
}
