<?php

namespace AmusementPark\EscapeRoom\Repository;

use App\EscapeRoom;
use App\EscapeRoomTime;

class RoomRepository
{
    public function getAllEscapeRooms()
    {
       return EscapeRoom::with('escapeRoomTime')->get();
    }

    public function getEscapeRoomById($id)
    {
       return EscapeRoom::with('escapeRoomTime')->findOrFail(['id' => $id])->first();
    }


    public function getEscapeRoomSlotsById($id)
    {
       return EscapeRoomTime::where('escape_room_id', $id)->with('escapeRoom')->get();
    }
    
}
