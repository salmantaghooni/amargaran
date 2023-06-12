<?php

namespace AmusementPark\Auth\Services\Interfaces;

use AmusementPark\Auth\Http\Requests\LoginRequest;
use AmusementPark\Auth\Http\Requests\RegisterRequest;

interface AuthInterface
{
       public function doLogin(LoginRequest $loginRequest);
       public function register(RegisterRequest $registerRequest);

       public function logout();

       
}
