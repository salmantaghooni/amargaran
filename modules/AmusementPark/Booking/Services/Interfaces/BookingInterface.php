<?php

namespace AmusementPark\Booking\Services\Interfaces;

use AmusementPark\Booking\Http\Requests\BookingRequest;
use Illuminate\Http\Request;

interface BookingInterface
{
    public function getBookings(Request $request);
    public function storeBook(BookingRequest $bookingRequest);   
    public function deleteBook($id);
}
