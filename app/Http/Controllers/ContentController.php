<?php

namespace App\Http\Controllers;

use App\User;
use App\Content;
use DB;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as Image;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Scalar\String_;

class ContentController extends Controller
{
    public function index()
    {
        return view('add');
    }

    public function store(Request $request){

        $input = $request;

        $article = new Content();

        $title = $input['InputNaam'];
        $article->naam = $title;

        $article->save();

        return Redirect::to('/');
    }
}
