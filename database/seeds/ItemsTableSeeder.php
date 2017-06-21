<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        // Truncate (or delete) all rows first
        DB::table('items')->delete();

        $items = [
        'Baby bed',
        'Bagage zak',
        'Bench',
        'Bestek',
        'Bluetooth speaker',
        'Boek',
        'Boeken',
        'Buggy',
        'Camping car',
        'Caravan',
        'Dakkoffer',
        'Draagbaar zonnepaneel',
        'Draagdoek',
        'Draagrugzak',
        'Drinkbus',
        'Externe batterij (zonne energie)',
        'Externe batterij',
        'Fiets GPS',
        'Fiets',
        'Fietsenrek (auto)',
        'Gamel',
        'Gasvuur',
        'GPS',
        'Gri gri (klimmen)',
        'Gri gri',
        'Kampeerbank',
        'Kampeerstoel',
        'Kano',
        'Klim broekje',
        'Klim koord',
        'Koelbox',
        'Koplamp',
        'Kubb',
        'Magnesiumstick',
        'Mini BBQ',
        'Musketon',
        'Opblaasmatje',
        'Opblaasmatras',
        'Papfles',
        'Petanque',
        'Reis spelletjes',
        'Reisgidsen',
        'Reiskoffer',
        'Roeispanen',
        'Rubber boot',
        'Shelter (zijl)',
        'Skibril',
        'Skies',
        'Skihelm',
        'Slaapmatje',
        'Sneeuwketting',
        'Sneeuwkettingen',
        'Sneeuwlaarzen',
        'Snorkel',
        'Snowboard',
        'Stratenplan',
        'Surfboard',
        'Tent (kamperen)',
        'Tent (strand)',
        'Trekkersrugzak',
        'Veldbed',
        'Vislijn',
        'Voeding',
        'Volleyball net',
        'Wandel GPS',
        'Wandelstokken',
        'Zaklamp',
        'Zakmes',
        'Zeker acht (klimmen)',
        'Zwembad speeltjes',
        'Zwemvliezen',
        ];

        foreach ($items as $value) {
            $url = $this->convertNameToUrl($value);    

            DB::table('items')->insert([
                [
                'name' => $value,
                'url' => $url
                ]
                ]);           
        }
    }

    public function convertNameToUrl($name) {
        return strtolower(str_replace(' ', '-', $name));
    }
}
