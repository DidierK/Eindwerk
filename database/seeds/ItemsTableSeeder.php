<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'name' => 'Dakkoffer',
        ]);

        DB::table('items')->insert([
            'name' => 'Strandstoel',
        ]);

        DB::table('items')->insert([
            'name' => 'Coolbox',
        ]);

        DB::table('items')->insert([
            'name' => 'Tent',
        ]);

        DB::table('items')->insert([
            'name' => 'Fietskoffer',
        ]);

        DB::table('items')->insert([
            'name' => 'Fietspomp',
        ]);
    }
}
