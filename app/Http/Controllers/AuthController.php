<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function home()
    {
        if (Auth::check()) {
            return redirect()->route('profile');
        }

        return view('welcome');
    }

    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        $providerUser = Socialite::driver($provider)->user();

        $user = User::updateOrCreate([
            'email' => $providerUser->getEmail(),
        ], [
            'name' => $providerUser->getName(),
            'provider_id' => $providerUser->getId(),
            'provider_avatar' => $providerUser->getAvatar(),
            'provider_name' => $provider,
        ]);

        Auth::login($user);

        return redirect()->route('profile');
    }

    public function profile()
    {
        if (!auth()->check()) {
            return redirect('/');
        }

        $user = auth()->user();
        return view('user_profile', ['user' => $user]);
    }

    public function logged()
    {
        return response()->json(auth()->user());
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
