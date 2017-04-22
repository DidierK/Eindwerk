<?php

use Illuminate\Database\Seeder;

class ItemNamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('item_names')->insert([
            'name' => 'Dakkoffer',
        ]);

        DB::table('item_names')->insert([
            'name' => 'Strandstoel',
        ]);

        DB::table('item_names')->insert([
            'name' => 'Coolbox',
        ]);

        DB::table('item_names')->insert([
            'name' => 'Tent',
        ]);

        DB::table('item_names')->insert([
            'name' => 'Fietskoffer',
        ]);

        DB::table('item_names')->insert([
            'name' => 'Fietspomp',
        ]);
    }
}
