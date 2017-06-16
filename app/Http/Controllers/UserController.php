<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;
use App\User;
use App\UserItem;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
    }

    public function details() {
        $user_details = User::find(Auth::id())->first();

        return view('profile.details', ['user_details' => $user_details]);
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



        // TODO: Here we only have to validate the values but we should only check on the
        // name and email fields wether they are legit or not empty
        // The tel and adres can be null so if they are we simply store there value which would be null
        // (So we have to make those fields nullable tho)
        // TODO: Actually we should do a "PUT" request, but since we're in a form this shouldn't be too hard
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $user_details = User::find($id);

        $user_items =  UserItem::where("user_id", $id)
        ->join('items', 'user_items.item_id', '=', 'items.id')
        ->get(["items.name", "user_items.thumbnail", "user_items.id"]);
        return view('user.show', ['user_details' => $user_details, 'user_items' => $user_items]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $user_details = User::find($id)->first();

        return view('user.edit', ['user_details' => $user_details]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {

        $messages = [
        'name.required' => 'Vul een naam in.',
        'email.required' => 'Vul een email in.',
        'email.email' => 'Jou email moet geldig zijn.',
        'tel.regex' => 'Voer een geldig telefoonnummer in.',
        'houseNumber.max' => 'Voor een geldig huisnummer in.',
        'zip.digits' => 'Voer een geldige postcode in.',
        ];

        $trimmed_inputs = [];

        foreach($request->all() as $i => $item){
            $trimmed_inputs[$i] = trim($item);
        }

        // Note: tel is not required but if filled in make sure it's correct
        $validator = Validator::make($trimmed_inputs, [
            'name' => 'required',
            'email' => 'email|required',
            'tel' => 'regex:/^(\+32)[0-9]{9}$/',
            'houseNumber' => 'numeric|max:3',
            'zip' => 'numeric|digits:4|',
            ],$messages);

        if ($validator->fails()) {
            return redirect(url('profile/details'))
            ->withErrors($validator)
            ->withInput();

        } else {

        // So what we could do is just check which fields are not empty and ony validate those
            $user = User::find($id);

            $user->name = $trimmed_inputs['name'];
            $user->email = $trimmed_inputs['email'];
            $user->tel = $trimmed_inputs['tel'];
            $user->street = $trimmed_inputs['streetName'];
            $user->number = $trimmed_inputs['houseNumber'];
            $user->locality =  $trimmed_inputs['locality'];
            $user->zip = $trimmed_inputs['zip'];
            $user->save();

        // If errors redirect to edit screen, otherwise return to profile again
        // return redirect(url('user/' . Auth::id() . '/edit'));
            return redirect(url('profile/details'));

        }   
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
