<?php

namespace App\Http\Controllers;

use App\Mail\requestIncoming;
use App\Mail\requestAccepted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Auth;
use Validator;
use App\Request as RequestItem;
use App\User;
use App\UserItem;

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
        ->get(["users.name AS user_name", "users.id AS user_id", "user_items.thumbnail", "items.name AS item_name", "requests.id AS request_id", "requests.user_item_id", "requests.start_date", "requests.end_date", "requests.status"]);

        return view('requests.incoming', ["requests" => $requests]);
    }

    public function showOutgoingRequests() {

        $requests = RequestItem::join('users', 'requests.receiver_id', '=', 'users.id')
        ->join('user_items', 'requests.user_item_id', 'user_items.id')
        ->join('items', 'user_items.item_id', 'items.id')
        ->where('requests.sender_id', '=', Auth::id())
        ->orderBy('requests.created_at', 'DESC')
        ->get(["users.name AS user_name", "users.id AS user_id", "user_items.thumbnail", "items.name AS item_name", "requests.id AS request_id", "requests.user_item_id", "requests.start_date", "requests.end_date", "requests.status"]);

        return view('requests.outgoing',["requests" => $requests]);
    }

    public function acceptRequest($id) {

        $request = RequestItem::find($id);
        $request->status = "Bevestigd";
        $request->save();

        $sender_email = RequestItem::join('users', 'requests.sender_id', '=', 'users.id')
        ->where('requests.id', $id)
        ->pluck('users.email');

        $sender_email = $sender_email[0];

        $receiver_name = RequestItem::join('users', 'requests.receiver_id', '=', 'users.id')
        ->where('requests.id', $id)
        ->pluck('users.name');

        $receiver_name = $receiver_name[0];

        Mail::to($sender_email)->send(new requestAccepted($receiver_name));

        return back();
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
        // Check if dates are valid (not empty and valid day/month/year) => else throw error msg (and redirect)
        // Disable dates before today or check if they didn't take that
        // Check if start date is lower than end date => else throw error msg
        // Check here if overlap of dates
        // Check if the user has already send a request, so if Auth::id() as sender_id already send a request to this user_item_id 
        // CHECK IF USER IS LOGGED IN, ELSE REDIRECT TO LOGIN SCREEN!!!
        // Dateformat should be AFTER we get it from the DB
        // We could easily query the receiver_id through eloquent with user_item_id, however that would be unnecessary
        // because we can pass the receiver_id with the form


        // Check if the user_item_id send, matches a user_item_id in combination with the current user's id
        // If so, then current user already send a request for this user_item(_id)


        $messages = [
        'start.required' => 'Een vakantie begint niet zonder start datum.',
        'end.required' => 'Een vakantie eindigt niet zonder eind datum.',
        'after:' => 'Je vakantie kan niet beginnen als hij al gedaan is, toch?'
        ];
        
        $validator = Validator::make($request->all(), [
            'start' => 'required|date',
            'end' => 'required|date|after:start',
            ],$messages);

        // Normal validation
        if ($validator->fails()) {

         return redirect('user-item/' . $request->user_item_id)
         ->withErrors($validator)
         ->withInput();
     } else {

        // Checks if this user already send a request for this user item
        $hasRequest = RequestItem::where('sender_id', Auth::id())->where('user_item_id', $request->user_item_id)->get()->count();

        if($hasRequest){

         $validator->getMessageBag()->add('duplicate', 'Je hebt hiervoor al een verzoek verstuurd.');
         return back()->withErrors($validator)->withInput();
             // If that passes, create new request and redirect with success message
     } else {
        RequestItem::create([
            'sender_id' => Auth::id(),
            'receiver_id' => $request->user_id, // TODO: Verander dit naar echte img
            'user_item_id' => $request->user_item_id,
            'start_date' => date('Y-m-d',strtotime($request->start)), 
            'end_date' => date('Y-m-d',strtotime($request->end))
            ]);

        $request->session()->flash('alert-success', 'Jouw verzoek is succesvol verstuurd!');

        $item_name = UserItem::join('items', 'user_items.item_id', '=', 'items.id')
        ->where("user_items.id", $request->user_item_id)
        ->pluck("items.name");

        $item_name = $item_name[0];

        Mail::to(User::where('id', $request->user_id)->value('email'))->send(new requestIncoming(User::find(Auth::id()), $item_name));

        return redirect(url('/user-item/' . $request->user_item_id));

    }



}








}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
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
        // First make a "Are you sure screen pop up with Javascript."
        $requests = RequestItem::find($id)->delete();
        // And add a flash message at the top?
        return back();
        
    }

    private function validateRequest($request){

        $user_item_id = RequestItem::where('sender_id', Auth::id())->value('user_item_id');

        // Check if the user_item_id send, matches a user_item_id in combination with the current user's id
        // If so, then current user already send a request for this user_item(_id)
        if($user_item_id == $request->user_item_id){
            $request->session()->flash('alert-warning', 'Je hebt al een verzoek verstuurd.');

        } else {
            if(!empty($request->start) && !empty($request->end)) {


                if($request->start < $request->end) {
                    return true;

                } else {
                    $request->session()->flash('alert-warning', 'Start datum moet vroeger zijn dan einddatum.');
                }


            } else {
                if(empty($request->start)) {
                    $request->session()->flash('alert-warning', 'Start kan niet leeg zijn.');
                }

                if(empty($request->end)) {
                    $request->session()->flash('alert-warning', 'Eind datum kan niet leeg zijn.');
                }

            }

        }

    }

}
