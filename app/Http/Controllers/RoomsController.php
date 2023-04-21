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
        //
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


    public function edit(Room $rooms)
    {
        //
    }


    public function update(RoomUpdateRequest $request, Room $rooms)
    {
        $this->service->update(
            $rooms,
            RoomsDto::formRequest($request)
        );
    }


    public function destroy(Room $rooms)
    {
        //
    }
}
