<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth:api', ['except' => ['login']]);
    // }

    public function register(UserRegisterRequest $request)
    {
      
        extract($request->all());
        $request->validated();

        $user = User::create([
            'name'=>$name,
            'email'=>$email,
            'password'=>bcrypt($password),
        ]);

        $token = auth('api')->login($user);
        return $this->respondWithToken($token);

    }

    public function login()
    {
        $credentials = request(['email', 'password']);

        if (! $token = auth('api')->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }


    public function me()
    {
        return response()->json(auth('api')->user());
    }

    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }


    public function refresh()
    {
        return $this->respondWithToken(auth('api')->refresh());
    }


    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60
        ]);
    }
}
