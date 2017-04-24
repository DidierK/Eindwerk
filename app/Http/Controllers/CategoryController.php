<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Category;
use App\Item;
use App\ItemName;
use DB;


class CategoryController extends Controller {
	public function index() {
		$categories = Category::pluck('name');
		return view('categories.categories', ['categories' => $categories]);
	}

    public function showItemsByCategoryId($category_name) {

    	$category_id = Category::where('name', $category_name)->pluck('id');

    	$items = DB::table('category_item_name')
        ->join('item_names', 'category_item_name.item_name_id', '=', 'item_names.id')
        ->where('category_item_name.category_id', $category_id)
        ->get(['item_names.name']);

        // var_dump($items);
        return view('categories.category', ['category_name' => $category_name, 'items' => $items]);
  
    }
}
