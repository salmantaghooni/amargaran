<?php

namespace AmusementPark\EscapeRoom\Services\Interfaces;


interface RoomInterface
{
       public function getAllEscapeRooms();
       public function getEscapeRoomById($id);
       public function getEscapeRoomSlotsById($id);

       
}
