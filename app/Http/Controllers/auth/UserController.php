<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Passport\HasApiTokens;
use Laravel\Socialite\Facades\Socialite;

class UserController extends Controller
{
    use HasApiTokens, HasFactory, Notifiable;

    public function register(Request $request): JsonResponse
    {
        $validator = $request->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required|email',
            'password' => 'required|min:6',
        ]);

        if(!$validator) return response()->json($validator->error());

        $user = User::create([

            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'email'=>$request->email,
            'password' => Hash::make($request->password),
        ]);

        $token = $user->createToken('Laravel')->accessToken;
        $user->reg_token = $token;

        return response()->json(['token' => $token], 200);
    }


    public function login(Request $request): JsonResponse
    {
        $validator = $request->validate([
            'email'=>'required|email',
            'password' => 'required',
        ]);

        if (!$validator) {
            return response()->json($validator->error());
        }

        $user = User::query()->where('email', $request->email)->first();
        $hash = Hash::check($request->password, $user->password);

        if (!$user || !$hash) {
            $response = ['message' => 'Email Or Password Is Incorrect'];
            return response()->json($response, 422);
        }

        $user->save();
        $token = $user->createToken('Laravel Password Grant Client')->accessToken;
        $response = ['token' => $token];
        return response()->json($response);
    }

    public function authUser(): JsonResponse
    {
//        dd(auth()->user());
        return response()->json(['user' => auth()->user()]);
    }

    public function forgotPassword(Request $request): JsonResponse
    {
        $user = User::query()->where('email', $request->email,)->first();
        $user->password ='';

        if($request->password){
            $user->password = Hash::make($request->password);
        }
        $user->save();

        return response()->json($user);
    }
    public function logout(Request $request): JsonResponse
    {
        $request->user()->token()->revoke();

        return response()->json(['message' => 'Successfully logged out']);
    }

    public function redirectToProvider($provider):JsonResponse
    {
        $user = Socialite::driver($provider)->stateless()->user();

        if (!$user) return response()->json(['message' => 'user does not fined']);

        $findUser = User::query()->where('email', $user->email)->first();
        if (!$findUser AND $provider === 'facebook') {
            $newUser = User::create([
                'firstname'=>$user->nickname,
                'lastname'=>$user->nickname,
                'email'=>$user->email,
                'provider'=>$provider,
                'password' => Str::random(8)
            ]);

            $token = $user->createToken('Laravel')->accessToken;
            $newUser->reg_token = $token;

            return response()->json(['token' => $token], 204);
        }
        if (!$findUser) {
            $newUser = User::create([
                'firstname'=>$user->name,
                'lastname'=>$user->name,
                'email'=>$user->email,
                'provider'=>$provider,
                'password' => Str::random(8)
            ]);

            $token = $user->createToken('Laravel')->accessToken;
            $newUser->reg_token = $token;

            return response()->json(['token' => $token], 204);
        }

        $token = $findUser->createToken('Laravel Password Grant Client')->accessToken;

        $response = ['token' => $token];
        return response()->json($response);

    }
}
