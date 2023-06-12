<?php

namespace AmusementPark\EscapeRoom\Services;

use App\Http\Resources\RoomResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use PDO;
use AmusementPark\EscapeRoom\Services\Interfaces\RoomInterface;
use AmusementPark\EscapeRoom\Repository\RoomRepository;


class RoomService implements RoomInterface
{
    protected $roomRepository;

    public function __construct(RoomRepository $roomRepository)
    {
        $this->roomRepository = $roomRepository;
    }

    public function getAllEscapeRooms()
    {
        return $this->roomRepository->getAllEscapeRooms();
    }

    public function getEscapeRoomSlotsById($id)
    {
        return $this->roomRepository->getEscapeRoomSlotsById($id);
    }

    

    public function getEscapeRoomById($id)
    {
        return $this->roomRepository->getEscapeRoomById($id); 
    }
    
}
