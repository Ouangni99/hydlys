<?php

namespace App\Services;

use App\DTO\RoomsDto;
use App\Models\Room;

class RoomsService
{

    public function store(RoomsDto $dto)
    {
        $room = Room::create($dto->toArray());
        $room->attachFiles($dto->pictures);

        return $room;
    }

    public function update(Room $room, RoomsDto $dto): Room
    {
        $room->update($dto->toArray());
        $room->attachFiles($dto->pictures);

        return $room;
    }

}
