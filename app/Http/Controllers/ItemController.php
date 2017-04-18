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
        $user_items = Item::where('user_id', Auth::user()->id)->get(['name', 'price', 'thumbnail']);

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
        Item::create([
            'name' => 'Dakkoffer', 
            'description' => 'Dit is een leuk item',
            'thumbnail' => 'thumbnail', 
            'price' => 0,
            'category_id' => 1, 
            'user_id' => 1
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
}
