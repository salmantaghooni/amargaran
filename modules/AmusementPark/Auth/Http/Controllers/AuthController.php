<?php

namespace AmusementPark\Auth\Http\Controllers;

use AmusementPark\Auth\Http\Controllers\ApiController;
use AmusementPark\Auth\Http\Requests\LoginRequest;
use AmusementPark\Auth\Http\Requests\RegisterRequest;
use AmusementPark\Auth\Services\Interfaces\AuthInterface;
use App\EscapeRoom;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Request;

class AuthController extends ApiController
{
    protected $authService;

    public function __construct(AuthInterface $authService)
    {
        $this->authService = $authService;
    }


  
    public function register(RegisterRequest $registerRequest)
    {   
        $user =$this->authService->register($registerRequest);  
        if($user)
        return $this->successResponse(['email'=>$user->email],Response::HTTP_CREATED);
    }


       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function doLogin(LoginRequest $loginRequest)
    {   
        $isUser =$this->authService->doLogin($loginRequest); 
        if($isUser)
            return $this->successResponse(["access_token"=>$isUser],Response::HTTP_OK);
        return $this->errorResponse(["email or password Invalid"],Response::HTTP_UNAUTHORIZED);

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
    }


    public function user(){
        dd(auth()->user());
    }

    
}
