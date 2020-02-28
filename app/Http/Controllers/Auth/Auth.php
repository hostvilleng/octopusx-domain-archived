<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;

class Auth extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function redirectToProvider(){
        return Socialite::driver('github')->stateless()->redirect();
    }

    public function handleProviderCallback(){
        $user = Socialite::driver('github')->stateless()->user();

        return response()->json($user, 200);

    }
    //
}
