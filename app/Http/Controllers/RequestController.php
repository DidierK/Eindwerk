<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Request as RequestItem;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('user.requests');
    }

    public function showIncomingRequests() {
        // Query all the requests which have my (so Auth::id()) ID attached to it
        // TODO: In DB automatically delete the requests which have expired (so over start day)
        $requests = RequestItem::join('users', 'requests.sender_id', '=', 'users.id')
        ->join('user_items', 'requests.user_item_id', 'user_items.id')
        ->join('items', 'user_items.item_id', 'items.id')
        ->where('requests.receiver_id', '=', Auth::id())
        ->orderBy('requests.created_at', 'DESC')
        ->get(["users.name AS user_name", "users.id AS user_id", "users.avatar", "items.name AS item_name", "requests.user_item_id", "requests.start_date", "requests.end_date"]);

        return view('requests.incoming', ["requests" => $requests]);
    }
    public function showOutgoingRequests() {

        $requests = RequestItem::join('users', 'requests.receiver_id', '=', 'users.id')
        ->join('user_items', 'requests.user_item_id', 'user_items.id')
        ->join('items', 'user_items.item_id', 'items.id')
        ->where('requests.sender_id', '=', Auth::id())
        ->orderBy('requests.created_at', 'DESC')
        ->get(["users.name AS user_name", "users.id AS user_id", "user_items.thumbnail", "items.name AS item_name", "requests.user_item_id", "requests.start_date", "requests.end_date", "requests.status"]);

        return view('requests.outgoing',["requests" => $requests]);
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
        // Check if the user has already send a request, so if Auth::id() as sender_id already send a request to this user_item_id 
        // CHECK IF USER IS LOGGED IN, ELSE REDIRECT TO LOGIN SCREEN!!!
        // Dateformat should be AFTER we get it from the DB
        // We could easily query the receiver_id through eloquent with user_item_id, however that would be unnecessary
        // because we can pass the receiver_id with th form

        RequestItem::create([
            'sender_id' => Auth::id(),
            'receiver_id' => $request->user_id, // TODO: Verander dit naar echte img
            'user_item_id' => $request->user_item_id,
            'start_date' => $request->start, 
            'end_date' => $request->end
            ]);
        // If succesful show that message, if not show another flash message

        $request->session()->flash('alert-success', 'Jouw verzoek is succesvol verstuurd!');
        return redirect(url('/user-item/' . $request->user_item_id));
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
