<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Category;
use App\Item;
use App\ItemName;
use App\User;
use DB;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $user_items = DB::table('items')
        ->join('item_names', 'items.item_name_id', '=', 'item_names.id')
        ->get(['items.id', 'item_names.name', 'price', 'thumbnail']);

        return view('me.profile', ['user_items' => $user_items]);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        // Method pluck neemt alle values van 1 column
        // Zet deze list btw in ALFABETISCHE volgorde
        // Ook maak van deze input een "search input" zoals bij legum.
        $item_names = ItemName::orderBy('name', 'asc')->pluck('name');
        return view('item.create', ['item_names' => $item_names]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        // TODO: Make all optional fields in table nullable (for example description)
        // TODO: Make a form validation method and input all our fields in it
        // TODO get category id if category input is not empty, otherwise obviously leave null
        $input_name = $request->input('item_names');
        $input_description = $request->input('description');
        $input_price = $request->input('price');
        $input_image = $request->file('thumbnail');
        $image_path = $this->storeImageAndGetPath($input_image);

        // Get item name id by name
        $item_name_id = ItemName::where('name', $input_name)->pluck('id')->first();

        Item::create([
            'description' => $input_description,
            'thumbnail' => asset('storage/' . $image_path), // TODO: Verander dit naar echte img
            'price' => $input_price,
            'item_name_id' => $item_name_id, 
            'user_id' => Auth::user()->id
            ]);

        // Redirect to page where personal items are
        return redirect(url('me/profile'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        echo "Here comes the show page!";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        echo "Here comes the edit page!";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        Item::find($id)->delete();
        return ['redirect' => url('me/profile')];
    }

    public function storeImageAndGetPath($img) {
        $path = $img->store('public');

        // hashName is the same method used to generate image name
        // Now it would be better to somehow just get the stored filename with a more abstract method
        // TODO: Maybe later at some sort of cropping with the image that stores so they halve have same aspect ratio
        // (Or we shouldn't crop a users pictures?)
        return $img->hashName();
    }
}
