<?php

namespace App\Http\Controllers;

use App\DTO\RoomsDto;
use App\Http\Requests\Room\RoomCreateRequest;
use App\Http\Requests\Room\RoomUpdateRequest;
use App\Models\Room;
use App\Services\RoomsService;

class RoomsController extends Controller
{

    public function __construct(
        public RoomsService $service
    )
    {
    }

    public function index()
    {
        //
    }

    public function create()
    {
        $room = new Room();
        $room->fill([
            'pieces' => 2,
            'rooms_number' => null,
            'price' => 25000,
        ]);
        return view('admin.rooms.form', [
            'room' => $room,
        ]);
    }


    public function store(RoomCreateRequest $request)
    {
        $this->service->store(
            RoomsDto::formRequest($request)
        );
    }


    public function show(Room $rooms)
    {
        //
    }


    public function edit(Room $room)
    {

        return view('admin.rooms.form', [
            'room' => $room,
        ]);
    }


    public function update(RoomUpdateRequest $request, Room $room)
    {

        $this->service->update(
            $room,
            RoomsDto::formRequest($request)
        );

    }


    public function destroy(Room $rooms)
    {
        //
    }
}
