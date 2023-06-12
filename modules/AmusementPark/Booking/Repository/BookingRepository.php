<?php

namespace AmusementPark\Booking\Repository;

use AmusementPark\Booking\Http\Requests\BookingRequest;
use App\Booking;
use App\EscapeRoom;
use App\EscapeRoomTime;
use App\User;

class BookingRepository
{
  

    public function getBookings()
    {   
     return auth()->user()->with('bookings')->get();  
    }

    public function store(BookingRequest $bookingRequest,$amount,$discount)
    {   
      $escape_room_id=EscapeRoomTime::select('escape_room_id')->where('id',$bookingRequest->escape_room_time_id)->first();
     return Booking::create([
        'user_id' => auth()->user()->id,
        'escape_room_id' => $escape_room_id->escape_room_id,
        'escape_room_time_id' => $bookingRequest->escape_room_time_id,
        'amount' => $amount,
        'discount' => $discount,
      ]);
    }



    public function delete($id)
    {   
      return Booking::destroy($id);
    }


    
    
}
