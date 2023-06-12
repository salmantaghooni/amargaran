<?php

namespace AmusementPark\Booking\Services;

use AmusementPark\Booking\Http\Requests\BookingRequest;
use AmusementPark\Booking\Services\Interfaces\BookingInterface;
use AmusementPark\Booking\Repository\BookingRepository;
use AmusementPark\EscapeRoom\Repository\RoomRepository;
use App\Booking;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class BookingService implements BookingInterface
{
    protected $bookRepository;
    protected $roomRepository;
    public function __construct(BookingRepository $bookRepository,RoomRepository $roomRepository)
    {
        $this->bookRepository = $bookRepository;
        $this->roomRepository = $roomRepository;

    }

    public function getBookings($request)
    {
      return  $this->bookRepository->getBookings($request);
    }

    public function storeBook(BookingRequest $bookRequest)
    {
            $room = $this->roomRepository->getEscapeRoomById($bookRequest->escape_room_time_id); 
            if(auth()->user()->birth_date==Carbon::today()->toDateString()){
                    $amount = ($room->amount *100) / 10;
                    return  $this->bookRepository->store($bookRequest,$amount,10);
                   }
                   
                   return  $this->bookRepository->store($bookRequest,$room->amount,0);
    }

    public function deleteBook($id)
    {
        $this->bookRepository->delete($id);
    }


   
    
}
