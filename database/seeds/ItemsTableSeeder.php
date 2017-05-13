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
        [
        "name" => "Dakkoffer",
        ],
        [
        "name" => "Tent (strand)",
        ],
        [
        "name" => "Tent (kamperen)",
        ]
        ];

        foreach ($items as $key => $value) {
            $value["url"] = $this->convertNameToUrl($value["name"]);    

            DB::table('items')->insert([
                    [
                    'name' => $value['name'],
                    'url' => $value['url']
                    ]
                    ]);           
        }
    }

    public function convertNameToUrl($name) {
        return strtolower(str_replace(' ', '-', $name));
    }
}
