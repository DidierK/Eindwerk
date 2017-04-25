<?php

use Illuminate\Database\Seeder;

class Category_ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

    	/**
    		* Define the relationship category/item here
    		* Make sure ALL defined categories and items EXIST before seeding this class 
    		*/

    		$cat_items = [

    			"Transport" => [
    				"Dakkoffer" 
    			],

    			"Wintersport" => [
    				"Dakkoffer" 
    			]

    		];


    	/* BELOW WILL PUT EVERYTHING IN PLACE (Don't touch) */

    	// Step 1: Loop all categories in array
    		foreach ($cat_items as $key => $value) {

    		// Step 2: Get category ID
    			$category = DB::table('categories')->where('name', $key)->first(['id']);
    			$cat_id = $category->id;

    		// Step 3: Loop through all values in category
    			foreach($value as $v) {

    			// Step 4: Get item ID
    				$item = DB::table('items')->where('name', $v)->first(['id']);
    				$item_id = $item->id;

    			// Step 5: For each item insert this category ID and its item ID
    				DB::table('category_item')->insert([
    					[
    					'category_id' => $cat_id,
    					'item_id' => $item_id
    					]
    					]);
    			}
    			// Step 6: Iterate for next category
    		}

    	}
    }
