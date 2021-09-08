<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Pionect\Daalder\Models\ProductAttribute\Group;

class ProductAttributeGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // TODO: translate
        $this->createGroup('General', 'general', 'description', 1, 10);
        $this->createGroup('Specifiek', 'specific', 'format_list_numbered', 1, 20);
        $this->createGroup('Prijzen', 'prices', 'euro_symbol', 1, 30);
        $this->createGroup('Media', 'media', 'collections', 1, 40);
        $this->createGroup('Stock', 'stock', 'equalizer', 1, 45);
        $this->createGroup('Variatie', 'variations', 'palette', 1, 50);
        $this->createGroup('Opties', 'options', 'iso', 0, 60);
        $this->createGroup('Meta information', 'meta-data', 'search', 1, 35);
        $this->createGroup('Upsell', 'upsell', 'arrow_upward', 0, 80);
        $this->createGroup('Leveranciers', 'suppliers', 'local_shipping', 0, 85);
        $this->createGroup('Presentatie', 'presentation', 'web', 0, 90);
        $this->createGroup('Reviews', 'reviews', 'speaker_notes', 0, 100);
        $this->createGroup('Feeds', 'feeds', 'leak_add', 0, 110);
        $this->createGroup('Activiteiten', 'activities', 'history', 1, 115);
        $this->createGroup('Crawler', 'crawler', 'visibility', 0, 120);
    }

    private function createGroup($name, $code, $icon, $default, $sort_order)
    {
        Group::query()->updateOrInsert(['code' => $code], [
            'name' => $name,
            'icon' => $icon,
            'default' => $default,
            'sort_order' => $sort_order
        ]);
    }
}
