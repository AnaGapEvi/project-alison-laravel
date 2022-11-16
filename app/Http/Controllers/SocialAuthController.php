<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;
class SocialAuthController extends Controller
{
    public function redirectToProvider($provider)
    {

        $user = Socialite::driver($provider)->stateless()->user();
        if (!$user) return response()->json(['message' => 'user does not fined']);

        $findUser = User::query()->where('email', $user->email)->first();

        if ($findUser) {
            $token = $user->token;
            $response = ['token' => $token];
            return response()->json($response, 204);
        } else {
            User::create([
                'firstname' => $user->name,
                'lastname' => $user->name,
                'email' => $user->email,
                'password' => Str::random(8),
                'provider' => $provider
            ]);

            $token = $user->token;

            $response = ['token' => $token];

            return response()->json($response, 204);
        }
    }
}
