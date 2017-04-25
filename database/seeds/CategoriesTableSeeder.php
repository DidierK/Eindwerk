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
            ['name' => 'Avontuur'],
            ['name' => 'Wintersport'],
            ['name' => 'Transport']
        ]);

    }
}
