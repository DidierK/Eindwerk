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
        "Sport",  
        "Avontuur",
        "Transport",
        "Entertainment",
        "Baby",
        "Dieren",
        "Informatie",
        "Electro",
        "Voeding",
        "Veiligheid",
        "Kampeergerief",
        "Bagage",
        "Overnachting",
        ];

        foreach ($categories as $value) {
            $url = $this->convertNameToUrl($value);    

            DB::table('categories')->insert([
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
