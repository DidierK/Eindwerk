<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    public function index($item_name) {
    	// TODO CHECK ALL DATA WE NEED TO RETURN IN WIREFRAMES

    	$item_id = Item::where('name', $item_name)->pluck('id');

    	$items_per_user = DB::table('items')
    	->join('user_items', 'items.id', '=', 'user_items.item_id')
    	->join('users', 'user_items.user_id', '=', 'users.id')
    	->where('items.id', $item_id)
    	->get(['users.name', 'user_items.thumbnail', 'user_items.id', 'user_items.price']);

        return view('item.show', ["items_per_user" => $items_per_user]); 
    }

    public function getItems(Request $request) {

        $query = DB::table('items');

        foreach ($request->all() as $key => $value) {
            $query->where($key, $value);
        }

        $results = $query->get();
        return response()->json([ 'results' => $results]);        
    }

    public function searchItems(Request $request) {

        $query = DB::table('items');
    }   
}
