<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Socialite;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function index()
    {
        return view('auth.login');
    }

    public function redirect($provider) {
        // redirects to the login of facebook
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider) {

       $user = Socialite::driver($provider)->user();
       $authUser = $this->findOrCreateUser($user, $provider);
       Auth::login($authUser, true);

       return redirect($this->redirectTo);
   }

   public function findOrCreateUser($user, $provider) {
    // Check to see if a value in provider_id column matches user_id
    // If so return all credentials for this user and return this (stops function)
    if ($authUser = User::where('provider_id', $user->id)->first()) {
      return $authUser;
  }
    // Otherwise return the newly created User credentials
    // These credentials will now be in the table
  return User::create([
    'name'     => $user->name,
    'email'    => $user->email,
    'provider' => $provider,
    'provider_id' => $user->id,
    'avatar' => $user->avatar
    ]);
}
}
