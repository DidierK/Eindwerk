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

        DB::table('items')->insert([
            ['name' => 'Dakkoffer'],
        ]);
    }
}
