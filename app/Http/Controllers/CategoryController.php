<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Category;
use App\Item;
use App\UserItem;
use DB;


class CategoryController extends Controller {
	public function index() {
		$categories = Category::pluck('name');
		return view('categories.categories', ['categories' => $categories]);
	}

    public function showItemsByCategoryId($category_name) {

        $category = Category::where('name', $category_name)->first();

    	$category_id = $category->id;

    	$items = DB::table('category_item')
        ->join('items', 'category_item.item_id', '=', 'items.id')
        ->where('category_item.category_id', $category_id)
        ->get(['items.name']);

        // var_dump($items);
        return view('categories.category', [
            'category' => $category, 
            'items' => $items 
            ]);
  
    }
}
