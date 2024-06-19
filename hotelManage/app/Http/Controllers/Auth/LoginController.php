<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth; // Import Auth facade
use App\Models\User; // Import User model

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    /**
     * Redirect the user to the Google authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from Google.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleGoogleCallback()
    {
        // Retrieve user information from Google
        $googleUser = Socialite::driver('google')->user();

        // Register or login the user
        $this->_registerOrLoginUser($googleUser);

        // Redirect to home
        return redirect()->route('home');
    }

    /**
     * Register or login the user.
     *
     * @param $data
     */
    protected function _registerOrLoginUser($data)
    {
        // Check if user already exists
        $user = User::where('email', '=', $data->email)->first();

        if (!$user) {
            // Create a new user if not exists
            $user = new User();
            $user->name = $data->name;
            $user->email = $data->email;
            $user->provider_id = $data->id; // use the ID from the provider
            $user->avatar = $data->avatar;
            $user->save();
        }

        // Log in the user
        Auth::login($user);
    }
}
