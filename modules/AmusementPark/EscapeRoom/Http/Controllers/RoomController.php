<?php

namespace AmusementPark\EscapeRoom\Http\Controllers;

use AmusementPark\EscapeRoom\Http\Controllers\ApiController;
use AmusementPark\EscapeRoom\Services\Interfaces\RoomInterface;
use App\EscapeRoom;
use Illuminate\Http\Response;
class RoomController extends ApiController
{
    protected $roomService;

    public function __construct(RoomInterface $roomService)
    {
        $this->roomService = $roomService;
    }


       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {            
        return $this->successResponse($this->roomService->getAllEscapeRooms(),Response::HTTP_OK);
    }


    public function show($escapeRoomId)
    {
        return $this->successResponse($this->roomService->getEscapeRoomById($escapeRoomId),Response::HTTP_OK);
    }


    public function showSlots($escapeRoomId)
    {
        return $this->successResponse($this->roomService->getEscapeRoomSlotsById($escapeRoomId),Response::HTTP_OK);
    }

    
}
