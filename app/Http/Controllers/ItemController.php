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

    $vacations = DB::table('vacations')->get();

    return view('item.show', [
        "items_per_user" => $items_per_user, 
        "item_name" => $item_name, 
        "item_url" => $item_url,
        "item_id" => $item_id,
        "vacations" => $vacations
        ]); 
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
       return view('item.search');
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

    $query = DB::table('items')
    ->join('user_items', 'items.id', '=', 'user_items.item_id')
    ->join('users', 'users.id', '=', 'user_items.user_id')
    ->where('items.url', $item_url);
    
    // Hier gaan we niet foreach loopen omdat we de sortBy niet willen in een where zetten, enkel de city

    if($request->query("city")) {
        $query->where("users.locality", "LIKE", "%" . $request->query("city") . "%");
    } 

    

    switch ($request->query("sortOn")) {
        case "newest":
        $query->orderBy('user_items.created_at', 'desc');
        break;
        case "cheapest":
        $query->orderBy('price', 'asc');
        break;
        case "mostExpensive":
        $query->orderBy('price', 'desc');
        break;
    }

    $items = $query->get(["users.*", "user_items.*", "user_items.id as user_item_id", "items.name AS item_name"]);

    if(!empty($request->query("vacations"))) {
        // TODO: IN SOME WAY FIND HOW WEN CAN ONLY SEARCH FOR ITEMS WHO ARE ASSOCIATED WITH ALL THE VACATION ID'S
        // AND NOT "HAVE ONE OF THE ID'S IN THE ARRAY"
        $filtered_items = [];

        foreach($items as $item){

            $q = DB::table('user_item_vacation');

            $vacations = explode(",", $request->query("vacations"));
  
            $q->whereIn("user_item_vacation.vacation_id", $vacations);

            

            $result = $q->get();

            if(count($result) > 0) {
                $filtered_items[] = $item;
            }
        }

        return $filtered_items;
    }


    return $items;
} 
}
