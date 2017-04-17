<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Kamperen',
        ]);

        DB::table('categories')->insert([
            'name' => 'Strandvakantie',
        ]);

        DB::table('categories')->insert([
            'name' => 'Wintersport',
        ]);
    }
}
