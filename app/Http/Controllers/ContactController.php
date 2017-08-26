<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller {

    public function index()
    {
    	return view('contact.contact');
    }


    public function showReportForm()
    {
    	return view('contact.report');
    }


    public function sendReportForm(Request $request)
    {
    	$this->validate($request, [ 'email' => 'required', 'description' => 'required']);

        //PUT HERE AFTER YOU SAVE
        \Session::flash('flash_message','Schadeclaim is verzonden.');

        return redirect(url('report'));
    }
}
