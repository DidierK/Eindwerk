<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
    	// Truncate (or delete) all rows first
    	DB::table('categories')->delete();

        $categories = [
        [
        "name" => "Transport",
        ],
        [
        "name" => "Wintersport",
        ],
        [
        "name" => "Avontuur",
        ]
        ];

        foreach ($categories as $key => $value) {
            $value["url"] = $this->convertNameToUrl($value["name"]);    

            DB::table('categories')->insert([
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
