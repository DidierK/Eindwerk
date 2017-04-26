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

        DB::table('categories')->insert([
            // Can't we insert a JSON that we make ourselves in here?
            [
            'name' => 'Avontuur',
            'description' => 'Maak jezelf klaar om de bossen in te trekken of om de bergen te trotseren met deze spullen.',
            'hero' => 'adventure.jpg'
            ],

            [
            'name' => 'Wintersport',
            'description' => 'Ga je binnenkort naar de Alpen maar mis je nog iets? Vindt het hier.',
            'hero' => 'wintersport.jpg'
            ],

            [
            'name' => 'Transport',
            'description' => 'Spullen die je onderweg nodig hebt vindt je hier.',
            'hero' => 'transport.jpg'
            ]
        ]);

    }
}
