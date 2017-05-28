<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

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
        echo "Here should come the user data!";

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

        $user_name = $request->input('name');
        $user_email = $request->input('email');
        $user_tel = $request->input('tel');
        $user_address = $request->input('address');

        // So what we could do is just check which fields are not empty and ony validate those

        $user = User::find($id);

        $user->name = $user_name;
        $user->email = $user_email;
        $user->tel = $user_tel;
        $user->address = $user_address;
        $user->save();

        // If errors redirect to edit screen, otherwise return to profile again
        // return redirect(url('user/' . Auth::id() . '/edit'));
        return redirect(url('me/profile'));
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
