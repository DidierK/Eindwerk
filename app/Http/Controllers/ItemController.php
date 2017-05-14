<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Auth;
use App\Category;
use App\Item;
use DB;

class ItemController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($item_url) {
    	// TODO CHECK ALL DATA WE NEED TO RETURN IN WIREFRAMES

    	$item_id = Item::where('url', $item_url)->pluck('id');

    	$items_per_user = DB::table('items')
    	->join('user_items', 'items.id', '=', 'user_items.item_id')
    	->join('users', 'user_items.user_id', '=', 'users.id')
    	->where('items.id', $item_id)
    	->get(['users.name', 'user_items.thumbnail', 'user_items.id', 'user_items.price']);

        return view('item.show', ["items_per_user" => $items_per_user]); 
    }

    public function getItems(Request $request) {

        $query = DB::table('items');

        $results = array();

        // Note: $request->all is an array
        foreach ($request->all() as $key => $value) {
            $query->where($key, $value);
        }

        $items = $query->get();

        // For each record
        foreach ($items as $item) {
        $results[] = ['url' => $item->url, 'label' => $item->name]; //you can take custom values as you want
    }

        return $results;      
    }

    public function searchItems(Request $request) {

        $term = $request->query('term');

        $results = array();
        
        $items = DB::table('items') //Your table name
        ->where('name', 'like', '%'.$term.'%') //Your selected row
        ->take(5)->get(["id", "name"]);

        // For each record
        foreach ($items as $item) {
        // We push an array into the results array
        $results[] = ['id' => $item->id, 'name' => $item->name]; //you can take custom values as you want
    }

    return $results;
}   
}
