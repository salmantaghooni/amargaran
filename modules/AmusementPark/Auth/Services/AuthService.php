<?php

namespace AmusementPark\Auth\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use PDO;
use AmusementPark\Auth\Services\Interfaces\AuthInterface;
use AmusementPark\Auth\Repository\AuthRepository;
use Illuminate\Support\Facades\Auth;

class AuthService implements AuthInterface
{
    protected $authRepository;

    public function __construct(AuthRepository $authRepository)
    {
        $this->authRepository = $authRepository;
    }

    public function register($registerRequest)
    {
      return  $this->authRepository->register($registerRequest);
    }

    public function doLogin($loginRequest)
    {
    $user = $this->authRepository->doLogin($loginRequest);
    $accessToken = $user->createToken('')->accessToken;
    if(isset($accessToken)){
            return $accessToken;
        }
            
        return null;
    }

    public function logout()
    {
       
    }
    
}
