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
            'name' => 'Avontuur',
        ]);

        DB::table('categories')->insert([
            'name' => 'Strand',
        ]);

        DB::table('categories')->insert([
            'name' => 'Wintersport',
        ]);

        DB::table('categories')->insert([
            'name' => 'Reisbenodigdheden',
        ]);
    }
}
