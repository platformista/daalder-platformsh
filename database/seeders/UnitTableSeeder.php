<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Pionect\Daalder\Models\Unit\Type;
use Pionect\Daalder\Models\Unit\Unit;

class UnitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $units = [
            'cubic_mm' => ['name' => 'Kubieke millimeter', 'type_id' => Type::VOLUME],
            'cubic_cm' => ['name' => 'Kubieke centimeter', 'type_id' => Type::VOLUME],
            'cubic_mt' => ['name' => 'Kubieke meter', 'type_id' => Type::VOLUME],
            'cubic_ft' => ['name' => 'Kubieke voet', 'type_id' => Type::VOLUME],
            'cubic_in' => ['name' => 'Kubieke inch', 'type_id' => Type::VOLUME],
            'gal' => ['name' => 'Gallon', 'type_id' => Type::VOLUME],
            'ml' => ['name' => 'Milliliter', 'type_id' => Type::VOLUME],
            'cl' => ['name' => 'Centiliter', 'type_id' => Type::VOLUME],
            'dl' => ['name' => 'Deciliter', 'type_id' => Type::VOLUME],
            'liter' => ['name' => 'Liter', 'type_id' => Type::VOLUME],
            'sqmt' => ['name' => 'Vierkante meter', 'type_id' => Type::PLANE],
            'sqft' => ['name' => 'Vierkante voet', 'type_id' => Type::PLANE],
            'sqin' => ['name' => 'Vierkante inch', 'type_id' => Type::PLANE],
            'sqmm' => ['name' => 'Vierkante millimeter', 'type_id' => Type::PLANE],
            'sqcm' => ['name' => 'Vierkante centimeter', 'type_id' => Type::PLANE],
            'sqyd' => ['name' => 'Vierkante yard', 'type_id' => Type::PLANE],
            'year' => ['name' => 'Jaar', 'type_id' => Type::TIME],
            'min' => ['name' => 'Minuut', 'type_id' => Type::TIME],
            'sec' => ['name' => 'Seconde', 'type_id' => Type::TIME],
            'halfyear' => ['name' => 'Half jaar', 'type_id' => Type::TIME],
            'month' => ['name' => 'Maand', 'type_id' => Type::TIME],
            'hour' => ['name' => 'Uur', 'type_id' => Type::TIME],
            'day' => ['name' => 'Dag', 'type_id' => Type::TIME],
            'quarter' => ['name' => 'Kwartaal', 'type_id' => Type::TIME],
            'week' => ['name' => 'Week', 'type_id' => Type::TIME],
            'pak' => ['name' => 'Per VE', 'type_id' => Type::OTHER],
            'pc' => ['name' => 'Stuk', 'type_id' => Type::OTHER],
            'bag' => ['name' => 'zak', 'type_id' => Type::OTHER],
            'crate' => ['name' => 'Krat', 'type_id' => Type::OTHER],
            'box' => ['name' => 'Doos', 'type_id' => Type::OTHER],
            'mm' => ['name' => 'Millimeter', 'type_id' => Type::LENGTH],
            'cm' => ['name' => 'Centimeter', 'type_id' => Type::LENGTH],
            'mt' => ['name' => 'Meter', 'type_id' => Type::LENGTH],
            'km' => ['name' => 'Km', 'type_id' => Type::LENGTH],
            'inch' => ['name' => 'Inch', 'type_id' => Type::LENGTH],
            'ft' => ['name' => 'Foot', 'type_id' => Type::LENGTH],
            'mg' => ['name' => 'mg', 'type_id' => Type::WEIGHT],
            'gram' => ['name' => 'Gram', 'type_id' => Type::WEIGHT],
            'kg' => ['name' => 'Kilogram', 'type_id' => Type::WEIGHT],
            'lb' => ['name' => 'Pound', 'type_id' => Type::WEIGHT],
        ];

        foreach ($units as $code => $unit) {
            Unit::updateOrInsert(['code' => $code], $unit);
        }
    }
}
