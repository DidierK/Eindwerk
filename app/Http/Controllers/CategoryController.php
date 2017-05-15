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
        ->get(['items.name', 'items.url']);

        // var_dump($items);
        return view('categories.category', [
            'category' => $category, 
            'items' => $items 
            ]);

    }

    public function getCategories(Request $request){
        // PUT THIS FUNCTIONALITY IN A SERVICE CLASS WITH A METHOD WITH ARGUMENTS TABLE NAME AND QUERY STRING?
        $query = DB::table('categories');

        $results = array();

        // Note: $request->all is an array
        foreach ($request->all() as $key => $value) {
            $query->where($key, $value);
        }

        // If no query string the query will remain the same
        $categories = $query->get();

        // For each record
        foreach ($categories as $category) {
            // TODO, OOK NOG URL RETURNEN
            $results[] = ['name' => $category->name, 'url' => $category->url];
        }

        return $results;

    }
}
