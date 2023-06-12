<?php

namespace AmusementPark\Booking\Http\Controllers;

use AmusementPark\Booking\Http\Controllers\ApiController;
use AmusementPark\Booking\Http\Requests\BookingRequest;
use AmusementPark\Booking\Services\Interfaces\BookingInterface;
use App\EscapeRoom;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BookingController extends ApiController
{
    protected $bookingService;

    public function __construct(BookingInterface $bookingService)
    {
        $this->bookingService = $bookingService;

    }


    public function index(Request $request){
        $books = $this->bookingService->getBookings($request);
        if($books)
        return $this->successResponse($books,Response::HTTP_OK);
        return $this->errorResponse($books,Response::HTTP_UNAUTHORIZED);
    }

    public function store(BookingRequest $bookingRequest){
        return $this->bookingService->storeBook($bookingRequest);

    }


    public function delete($id){
        
    }


  


    
}
