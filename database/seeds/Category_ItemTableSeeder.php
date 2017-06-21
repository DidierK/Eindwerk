<?php

use Illuminate\Database\Seeder;

class Category_ItemTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

    	// Truncate (or delete) all rows first
    	DB::table('category_item')->delete();

    	// Define which item belongs to which here (category/item names MUST exist)
    	$cat_items = [

        "Sport" => [
        'Sneeuwlaarzen',
        'Kano',
        'Wandel GPS',
        'Snowboard',
        'Klim broekje',
        'Roeispanen',
        'Vislijn',
        'Wandelstokken',
        'Fiets',
        'Snorkel',
        'Petanque',
        'Skihelm',
        'Zeker acht (klimmen)',
        'Fiets GPS',
        'Surfboard',
        'Musketon',
        'Skies',
        'Skibril',
        'Klim koord',
        'Gri gri (klimmen)',
        'Trekkersrugzak',
        'Kubb',
        'Zwemvliezen',
        'Volleyball net',
        ],

        "Avontuur" => [
        'Sneeuwlaarzen',
        'Kano',
        'Wandel GPS',
        'Tent (kamperen)',
        'Klim broekje',
        'Snorkel',
        'Koplamp',
        'Zeker acht (klimmen)',
        'Fiets GPS',
        'Musketon',
        'Rubber boot',
        'Wandel GPS',
        'Shelter (zijl)',
        'Klim koord',
        'Gri gri',
        'Trekkersrugzak',
        ],

        "Transport" => [
        'Dakkoffer',
        'Wandel GPS',
        'GPS',
        'Fiets',
        'Sneeuwketting',
        'Fiets GPS',
        'Buggy',
        'Fietsenrek (auto)',
        'Stratenplan',
        ],

        "Entertainment" => [
        'Roeispanen',
        'Vislijn',
        'Snorkel',
        'Petanque',
        'Reis spelletjes',
        'Surfboard',
        'Rubber boot',
        'Boek',
        'Kubb',
        'Zwemvliezen',
        'Zwembad speeltjes',
        ],

        "Baby" => [
        'Draagdoek',
        'Baby bed',
        'Buggy',
        'Papfles',
        'Draagrugzak',
        'Tent (strand)'
        ],

        "Dieren" => [
        'Bench',
        ],

        "Informatie" => [
        'Wandel GPS',
        'Fiets GPS',
        'GPS',
        'Boeken',
        'Stratenplan',
        'Reisgidsen',
        ],

        "Electro" => [
        'Bluetooth speaker',
        'Zaklamp',
        'Koplamp',
        'Externe batterij',
        'Externe batterij (zonne energie)',
        'Draagbaar zonnepaneel',
        ],

        "Voeding" => [
        'Drinkbus',
        'Mini BBQ',
        'Gamel',
        'Bestek',
        'Koelbox',
        'Papfles',
        'Gasvuur',
        ],

        "Veiligheid" => [
        'Klim broekje',
        'Skihelm',
        'Zeker acht (klimmen)',
        'Sneeuwkettingen',
        'Musketon',
        'Skibril',
        'Klim koord',
        'Gri gri (klimmen)',
        ],

        "Kampeergerief" => [
        'Drinkbus',
        'Tent (kamperen)',
        'Kampeerbank',
        'Koplamp',
        'Opblaasmatje',
        'Gasvuur',
        'Mini BBQ',
        'Gamel',
        'Magnesiumstick',
        'Veldbed',
        'Bestek',
        'Koelbox',
        'Camping car',
        'Kampeerstoel',
        'Shelter (zijl)',
        'Caravan',
        'Slaapmatje',
        'Trekkersrugzak',
        'Zaklamp',
        'Zakmes',
        'Opblaasmatras',
        ],

        "Bagage" => [
        'Reiskoffer',
        'Bagage zak',
        ],

        "Overnachting" => [
        'Tent (kamperen)',
        'Camping car',
        'Caravan',
        'Slaapmatje',
        'Opblaasmatras',
        'Koplamp',
        'Zaklamp',
        'Baby bed',
        'Veldbed',
        ]

        ];

        // TODO: Wrap this in a method?

    	// Step 1: Loop all categories in array
        foreach ($cat_items as $key => $value) {

    		// Step 2: Get category ID
          $category = DB::table('categories')->where('name', $key)->value('id');
          $cat_id = $category;

    		// Step 3: Loop through all values in category
          foreach($value as $v) {

    			// Step 4: Get item ID
             $item = DB::table('items')->where('name', $v)->value('id');
             $item_id = $item;

    			// Step 5: For each item insert this category ID and its item ID
             DB::table('category_item')->insert([
                [
                'category_id' => $cat_id,
                'item_id' => $item_id
                ]
                ]);
         }
    			// Step 6: Iterate for next category
     }

 }
}
