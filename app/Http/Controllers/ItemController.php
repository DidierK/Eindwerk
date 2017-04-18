<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Category;
use App\Item;


class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $user_items = Item::where('user_id', Auth::user()->id)->get(['id', 'name', 'price', 'thumbnail']);

        return view('me.profile', ['user_items' => $user_items]);

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        // Method pluck neemt alle values van 1 column
        $categories = Category::pluck('name');
        return view('item.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        // TODO: Make all optional fields in table nullable (for example description)
        // Replace these values with a form value
        // TODO: Make a form validation method and input all our fields in it
        // TODO: disect the uploaded file $input_name = $request->input('file');
        // TODO get category id if category input is not empty, otherwise obviously leave null
        $input_name = $request->input('name');
        $input_description = $request->input('description');
        $input_price = $request->input('price');
        $input_category = $request->input('categories');

        // Get category id by name
        $category_id = Category::where('name', $input_category)->pluck('id')->first();

        Item::create([
            'name' => $input_name, 
            'description' => $input_description,
            'thumbnail' => asset('images/background1.jpg'), // TODO: Verander dit naar echte img
            'price' => $input_price,
            'category_id' => $category_id, 
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
    public function show($id)
    {
        echo "Here comes the show page!";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        echo "Here comes the edit page!";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Item::find($id)->delete();
        return ['redirect' => url('me/profile')];
    }
}
