<?php

namespace App\Http\Controllers;

use Intervention\Image\Facades\Image;
use App\User;
use App\Content;
use DB;
use Illuminate\Http\Request;

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

        if (Input::file('image1')->isValid()) {
            $image1 = Image::make(Input::file('image1'));
            
            //ratio = 4:3
            $ratio = 4 / 3;

            //extenstie zoeken van geupload bestand
            $extension1 = Input::file('image1')->getClientOriginalExtension();

            //filename randomizen (string van nummers + huidige tijd)
            $fileName1 = rand(11111, 99999) . time() . '.' . $extension1;

            //image pad in var steken
            $imagePath1 = 'uploads/articles/' . $fileName1;

            //resize image so it fits the ratio, but doesnt stretch
            $image1->fit($image1->width(), intval($image1->width() / $ratio))->save($imagePath1);

        }

        /*if (Input::file('image2')->isValid()) {
            $image2 = Image::make(Input::file('image2'));

            //ratio = 4:3
            $ratio = 4 / 3;

            //extenstie zoeken van geupload bestand
            $extension2 = Input::file('image2')->getClientOriginalExtension();

            //filename randomizen (string van nummers + huidige tijd)
            $fileName2 = rand(11111, 99999) . time() . '.' . $extension2;

            //image pad in var steken
            $imagePath2 = 'uploads/articles/' . $fileName2;

            //resize image so it fits the ratio, but doesnt stretch
            $image2->fit($image2->width(), intval($image2->width() / $ratio))->save($imagePath2);

        }*/

        /*if (Input::file('image3')->isValid()) {
            $image3 = Image::make(Input::file('image3'));

            //ratio = 4:3
            $ratio = 4 / 3;

            //extenstie zoeken van geupload bestand
            $extension3 = Input::file('image3')->getClientOriginalExtension();

            //filename randomizen (string van nummers + huidige tijd)
            $fileName3 = rand(11111, 99999) . time() . '.' . $extension3;

            //image pad in var steken
            $imagePath3 = 'uploads/articles/' . $fileName3;

            //resize image so it fits the ratio, but doesnt stretch
            $image3->fit($image3->width(), intval($image3->width() / $ratio))->save($imagePath3);

        }*/

            $input = $request;

            $article = new Content();

            $naam = $input['InputNaam'];
            $categorie = $input['checkbox1'] && $input['checkbox3'] && $input['checkbox3'] && $input['checkbox4'];
            $waarborg = $input['InputAmount1'];
            $price = $input['InputAmount2'];
            $datum1 = $input['date-input-1'];
            $datum2 = $input['date-input-2'];


            $article->naam = $naam;
            $article->categorie = $categorie;
            $article->waarborg = $waarborg;
            $article->prijs = $price;
            $article->datum1 = $datum1;
            $article->datum2 = $datum2;

            $article->file_name1 = $fileName1;
            //$article->file_name2 = $fileName2;
            //$article->file_name3 = $fileName3;

            $uid = Auth::user()->id;
            $article->user_id = $uid;
            $article->user_name = Auth::user()->name;

            $article->save();

            return Redirect::to('/');

    }

    public function show()
    {
        $articles = Content::orderBy('created_at', 'desc')->paginate(16);
        return view('home', compact('articles'));
    }

    public function search() //get POST input from search bar
    {
        $keyword = Input::get('keyword');

        if (empty($keyword)) { //no input? redirect to previous page with flash message
            return Redirect::back()->with('noresult', 'Gelieve het zoekformulier niet leeg te laten.');
        }

        //got some input? redirect to search/{keyword}
        return Redirect::to('search/'.$keyword);

    }

    public function results($keyword)
    {
        $results = DB::table('users')
            ->select('content.user_name', 'content.naam', 'content.categorie', 'content.waarborg','content.prijs','content.file_name1','content.id')
            ->where('content.naam', 'LIKE', '%' . $keyword . '%')
            ->orWhere('content.prijs', 'LIKE', '%' . $keyword . '%')
            ->orWhere('content.categorie', 'LIKE', '%' . $keyword . '%')
            ->orWhere('content.file_name1', 'LIKE', '%' . $keyword . '%')
            ->orWhere('content.id', 'LIKE', '%' . $keyword . '%')
            ->join('content', 'users.id', '=', 'content.user_id')
            ->orderBy('content.created_at', 'desc')
            ->paginate(10);

        //no results? redirect to previous page with flash message
        if (count($results) === 0) {
            return Redirect::back()->with('noresult', 'Er werden geen artikels gevonden voor deze zoekopdracht. Gelieve het opnieuw te proberen.');
        }

        //got results? return the results view with $results and $keyword variables
        return view('search.results', compact('results', 'keyword'));

    }
}
