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
        $item_name = Item::where('url', $item_url)->value('name');

    	$items_per_user = DB::table('items')
    	->join('user_items', 'items.id', '=', 'user_items.item_id')
    	->join('users', 'user_items.user_id', '=', 'users.id')
    	->where('items.id', $item_id)
    	->get(['users.name', 'user_items.thumbnail', 'user_items.id', 'user_items.price']);

        return view('item.show', ["items_per_user" => $items_per_user, "item_name" => $item_name]); 
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

        $item_name = $request->query("item");

        $items = DB::table('items')
        ->where('name', $item_name)
        ->first(['url']);  

        if(count($items) > 0){
            return redirect(url('/item/' . $items->url));
        } else {
            var_dump("Redirect to 404 page here!");
        }

        
}   
}
