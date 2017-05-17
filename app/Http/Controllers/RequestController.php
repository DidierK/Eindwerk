<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.requests');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        // Check if dates are valid (not empty and valid day/month/year) => else throw error msg (and re)
        // Disable dates before today or check if they didn't take that
        // Check if start date is lower than end date => else throw error msg
        // Check here if overlap of dates
        // Dateformat should be AFTER we get it from the DB
        var_dump($request->all());
        $sender_id = Auth::id();
        // We could easily query the receiver_id through eloquent with user_item_id, however that would be unnecessary
        // because we can pass the receiver_id with th form
        $receiver_id = $request->user_id;
        $user_item_id = $request->user_item_id;
        $start = $request->start;
        $end = $request->end;
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
