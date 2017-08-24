<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;
use App\Category;
use App\Item;
use App\Transaction;
use App\UserItem;
use App\User;
use DB;

class UserItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $user_items = DB::table('user_items')
        ->join('items', 'user_items.item_id', '=', 'items.id')
        ->where('user_items.user_id', Auth::id())
        ->get(['user_items.id', 'items.name', 'user_items.price', 'user_items.thumbnail']);

        $item_names = DB::table('items')->get(['name']);

        $completeProfile;

        if($this->completeProfile()){
            $completeProfile = true;
        } else {
            $completeProfile = false;
        }

        return view('profile.my-items', ['user_items' => $user_items, 'item_names' => $item_names, 'completeProfile' => $completeProfile]);  

        
    }

    public function completeProfile() {
        $user = User::find(Auth::id());

        if(!$user->street || !$user->number || !$user->locality || !$user->zip) {
            return false;
        } else {
            return true;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        // Method pluck neemt alle values van 1 column
        // Zet deze list btw in ALFABETISCHE volgorde
        // Ook maak van deze input een "search input" zoals bij legum.
        $item_names = Item::orderBy('name', 'asc')->pluck('name');
        $vacations = DB::table('vacations')->orderBy('name', 'asc')->get(['id', 'name']);
        return view('user-items.create', ['item_names' => $item_names, 'vacations' => $vacations]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        // Automatically redirects back to view with the errors
        $this->validate($request, [
            'item_name' => 'required',
            'price' => 'required',
            'thumbnail' => 'required'
            ]);

        // If it validates
        $user_item = UserItem::create([
            "description" => $request->description,
            "thumbnail" => $this->uploadImage($request->file('thumbnail'), 'uploads/user-items'),
            "price" => $request->price,
            "item_id" => Item::where('name', $request->item_name)->value('id'),
            "user_id" => Auth::id()
            ]);

        // Store all vacations related to this user item
        foreach($request->vacations as $vacation_id)
        {
            $user_item_vacation = ["user_item_id" => $user_item->id, "vacation_id" => $vacation_id];

            DB::table('user_item_vacation')->insert([$user_item_vacation]);
        }

        return redirect(url('profile/my-items'));
    }

    private function uploadImage($image, $path) 
    {
        $image_name = time() . "-" . preg_replace('/\s+/', '-', $image->getClientOriginalName());
        $image->move($path, $image_name);

        return $image_name;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $user_item_user = DB::table('user_items')
        ->join('users', 'user_items.user_id', '=', 'users.id')
        ->join('items', 'user_items.item_id', '=', 'items.id')
        ->where('user_items.id', $id)
        // We do first so we wont have to loop it because it will always be one record anyway
        ->first(['users.*', 'items.*', 'user_items.*', 'users.name AS user_name']);

        $owned = $this->owned($id);

        $unavailable_dates = Transaction::where('user_item_id', $id)->get(['start_date', 'end_date']);

        $suitable_vacations = DB::table('user_item_vacation')
                                ->join('vacations', 'user_item_vacation.vacation_id', '=', 'vacations.id')
                                ->get(['vacations.name']);

        return view('user-items.show', [
            'user_item_user' => $user_item_user,
            'owned' => $owned,
            'unavailable_dates' => $unavailable_dates,
            'suitable_vacations' => $suitable_vacations,
            ]
            );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        echo "Here comes the edit page!";
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

    public function updateUserItem(Request $request, $id) {
        // TODO: Make all optional fields in table nullable (for example description)
        // TODO: Make a form validation method and input all our fields in it
        // TODO get category id if category input is not empty, otherwise obviously leave null

        $messages = [
        'item_name.required' => 'Kies een item naam.',
        'price.required' => 'Geef een prijs voor je item.',
        'price.regex' => 'Geef een geldige prijs in. (Maximum 2 cijfers na de komma)',
        'thumbnail.required' => 'Kies een afbeelding voor je item.',
        ];

        $trimmed_inputs = [];

        foreach($request->all() as $i => $item){
            $trimmed_inputs[$i] = trim($item);
        }

        // Note: tel is not required but if filled in make sure it's correct
        $validator = Validator::make($trimmed_inputs, [
            'item_name' => 'required',
            'price' => 'required|regex:/^[0-9]+(\.[0-9][0-9]?)?$/',
            'thumbnail' => 'required'
            ],$messages);

        if ($validator->fails()) {
            return $validator->messages();

        } else {
            $input_name = $trimmed_inputs['item_name'];
            $input_price = $trimmed_inputs['price'];
            $input_image = $request->file('thumbnail');
            $input_description = $trimmed_inputs['description'];

        // Get name of image and move ACTUAL image
            $image_name = time()."-".$input_image->getClientOriginalName();
            $input_image->move('uploads/user-items', $image_name);
            // De image_path misgien zonder asset() doen maar dan die asset() WEL doen waar we de dingen genereren?
            // Kwestie van flexibel te zijn en dat item thumbnails zowel lokaal als live goed weergeven indien ze zo verplaatst
            // worden.
            $image_path = asset('uploads/user-items') . '/' . $image_name;

        // Get item name id by name
            $item_id = Item::where('name', $input_name)->pluck('id')->first();

            $user_item = UserItem::find($id);

            $user_item->price = $input_price;
            $user_item->thumbnail = $image_path;
            $user_item->description = $input_description;
            $user_item->item_id = $item_id;
            
            $user_item->save();

        // Redirect to page where personal items are
        // return redirect(url('profile/my-items'));

            return $validator->messages();

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        // TODO: DELETE ACTUAL IMAGE IN UPLOAD FOLDER (SO GET THE IMAGE NAME AND DELETE THAT ONE)
        // ANDERS GAAT ONZE SERVER BINNEN DE KORSTE KEREN NATUURLIJK VOL STAAN
        UserItem::find($id)->delete();
        return back();
    }

    public function owned($id){
        $own_item_user = DB::table('user_items')
        // Get the item record
        ->where('user_items.id', $id)
        // Check if this item record's FK matches current user
        ->where('user_items.user_id', Auth::id())
        ->first();

        if(count($own_item_user) > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function insureUserItem($user_item_id) {
        // Put a flag that this item is insured
        var_dump("This item is insured!");
    }
}
