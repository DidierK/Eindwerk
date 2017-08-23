<?php

use Illuminate\Database\Seeder;

class VacationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Truncate (or delete) all rows first
    	DB::table('vacations')->delete();

        $vacations = [
        "Zonvakantie",
        "Kampeervakantie",
        "Wintervakantie"
        ];

        foreach ($vacations as $value) {  

            DB::table('vacations')->insert([
                [
                	'name' => $value,
                ]
                ]);           
        }
    }
}
