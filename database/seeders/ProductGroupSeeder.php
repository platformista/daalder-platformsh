<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Pionect\Daalder\Models\Product\Group;

class ProductGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $groups = [
            [
                'code' => '001',
                'name' => 'Plaatmaterialen'
            ],
            [
                'code' => '002',
                'name' => 'EPDM'
            ],
            [
                'code' => '003',
                'name' => 'Stalen dakpanplaten'
            ],
            [
                'code' => '004',
                'name' => 'Dakleren'
            ],
            [
                'code' => '005',
                'name' => 'Bevestigingsmaterialen'
            ],
            [
                'code' => '006',
                'name' => 'Verf'
            ],
            [
                'code' => '007',
                'name' => 'Polycarbonaat'
            ],
            [
                'code' => '100',
                'name' => 'Douglas'
            ],
            [
                'code' => '150',
                'name' => 'Hardhout'
            ],
            [
                'code' => '200',
                'name' => 'Speeltoestellen'
            ],
            [
                'code' => '201',
                'name' => 'Speeltoestellen accessoires'
            ],
            [
                'code' => '202',
                'name' => 'Zandbak'
            ],
            [
                'code' => '203',
                'name' => 'Speelhuisjes'
            ],
            [
                'code' => '204',
                'name' => 'Voetbaldoelen'
            ],
            [
                'code' => '205',
                'name' => 'Trampolines'
            ],
            [
                'code' => '206',
                'name' => 'Buitenspeelgoed'
            ],
            [
                'code' => '301',
                'name' => 'Bloembakken'
            ],
            [
                'code' => '302',
                'name' => 'Tuinmeubelen'
            ],
            [
                'code' => '303',
                'name' => 'Tuinaccessoires'
            ],
            [
                'code' => '304',
                'name' => 'Picknicktafels'
            ],
            [
                'code' => '305',
                'name' => 'Kachels'
            ],
            [
                'code' => '306',
                'name' => 'Buitenkeukens'
            ],
            [
                'code' => '307',
                'name' => 'Sauna\'s'
            ],
            [
                'code' => '308',
                'name' => 'Verlichting'
            ],
            [
                'code' => '309',
                'name' => 'Tuinkassen'
            ],
            [
                'code' => '401',
                'name' => 'Blokhutten'
            ],
            [
                'code' => '402',
                'name' => 'Kapschuren'
            ],
            [
                'code' => '403',
                'name' => 'Priëlen'
            ],
            [
                'code' => '404',
                'name' => 'Overkappingen'
            ],
            [
                'code' => '405',
                'name' => 'Schuren'
            ],
            [
                'code' => '406',
                'name' => 'Tuinkasten'
            ],
            [
                'code' => '407',
                'name' => 'Buitenverblijf accessoires'
            ],
            [
                'code' => '408',
                'name' => 'Ramen en deuren'
            ],
            [
                'code' => '701',
                'name' => 'Vuren tuinhout'
            ],
            [
                'code' => '702',
                'name' => 'Grenen tuinhout'
            ],
            [
                'code' => '703',
                'name' => 'Eikenhout'
            ],
            [
                'code' => '704',
                'name' => 'Steigerhout'
            ],
            [
                'code' => '705',
                'name' => 'Rondhout'
            ],
            [
                'code' => '706',
                'name' => 'Bamboe'
            ],
            [
                'code' => '707',
                'name' => 'Composiet en aluminium'
            ],
            [
                'code' => '801',
                'name' => 'Houten schutting'
            ],
            [
                'code' => '802',
                'name' => 'Composiet schutting'
            ],
            [
                'code' => '803',
                'name' => 'Aluminium schutting'
            ],
            [
                'code' => '804',
                'name' => 'Beton schutting'
            ],
            [
                'code' => '805',
                'name' => 'Natuurlijke schutting'
            ],
            [
                'code' => '806',
                'name' => 'Houten hekken'
            ],
            [
                'code' => '807',
                'name' => 'Stalen hekwerk'
            ],
            [
                'code' => '808',
                'name' => 'Gaas'
            ],
            [
                'code' => '809',
                'name' => 'Tuinafscheiding accessoires'
            ],
            [
                'code' => '901',
                'name' => 'Grind'
            ],
            [
                'code' => '902',
                'name' => 'Betonbestrating'
            ],
            [
                'code' => '903',
                'name' => 'Keramische bestrating'
            ],
            [
                'code' => '904',
                'name' => 'Hardsteen bestrating'
            ],
            [
                'code' => '905',
                'name' => 'Gebakken bestrating'
            ],
            [
                'code' => '906',
                'name' => 'Elementen'
            ],
            [
                'code' => '907',
                'name' => 'Zand'
            ],
            [
                'code' => '908',
                'name' => 'Verwerkingsmaterialen'
            ],
            [
                'code' => '998',
                'name' => 'Transport'
            ],
            [
                'code' => '999',
                'name' => 'overig'
            ],
            [
                'code' => '99999',
                'name' => 'Specials'
            ],
        ];

        foreach ($groups as $group) {
            Group::firstOrCreate($group);
        }
    }
}
