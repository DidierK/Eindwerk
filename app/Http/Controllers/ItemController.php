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

    $item_id = Item::where('url', $item_url)->value('id');
    $item_name = Item::where('url', $item_url)->value('name');

    $items_per_user = DB::table('items')
    ->join('user_items', 'items.id', '=', 'user_items.item_id')
    ->join('users', 'user_items.user_id', '=', 'users.id')
    ->where('items.id', $item_id)
    ->get(['users.name', 'users.locality', 'users.zip', 'user_items.thumbnail', 'user_items.id', 'user_items.price']);

    return view('item.show', [
        "items_per_user" => $items_per_user, 
        "item_name" => $item_name, 
        "item_url" => $item_url,
        "item_id" => $item_id
        ]); 
}

public function getItems(Request $request) {

    $query = DB::table('items');

    $results = array();

// Note: $request->all is an array
    foreach ($request->all() as $key => $value) {
        $query->where($key, $value);
    }

    $items = $query->take(5)->get();

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

public function sortUserItemInItem(Request $request, $item_url) {
    // Query user items that are under this item id and check the cities of the user of te user item
    // return $request->query("city");
    $items = DB::table('items')
    ->join('user_items', 'items.id', '=', 'user_items.item_id')
    ->join('users', 'users.id', '=', 'user_items.user_id')
    ->where('items.url', $item_url)
    ->where('users.locality', 'LIKE', '%' . $request->query("city") . '%')
    ->get();

    // Now we could return a view with the new data and then replace the old view with the relevant part of the new views
    // Or we could loop the data trough a v-for loop

    return $items;
} 

public function getUserItemsByItem(Request $request, $item_url) {
    // Query user items that are under this item id and check the cities of the user of te user item
    // return $request->query("city");
    // DO A QUERYBUILDER WITH THE QUERY STRING HERE
    $items = DB::table('items')
    ->join('user_items', 'items.id', '=', 'user_items.item_id')
    ->join('users', 'users.id', '=', 'user_items.user_id')
    ->where('items.url', $item_url)
    ->get(["users.*", "user_items.*", "user_items.id as user_item_id"]);

    return $items;
} 
}
