<?php

namespace AmusementPark\Auth\Repository;

use AmusementPark\Auth\Http\Requests\LoginRequest;
use AmusementPark\Auth\Http\Requests\RegisterRequest;
use App\User;
use Illuminate\Support\Facades\Auth;

class AuthRepository
{
    public function register(RegisterRequest $registerRequest)
    {
       return User::create([
            'email' => $registerRequest->email,
            'name' => $registerRequest->name ,
            'password' => bcrypt($registerRequest->password),
            'birth_date' => $registerRequest->birth_date
        ]);
    }

    public function doLogin(LoginRequest $loginRequest)
    {   

        if (auth()->attempt(['email' => $loginRequest->email, 'password' => $loginRequest->password])) {
            return  User::where('email', $loginRequest->email)->first();
        } else {
           return ['error' => 'Unauthorised'];
        }
        
        
    }

    
    
}
