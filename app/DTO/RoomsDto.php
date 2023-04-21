<?php

namespace App\DTO;

use Illuminate\Foundation\Http\FormRequest;

class RoomsDto implements \App\Interface\DataTransfertObject
{

    public function __construct(
        public readonly int    $rooms_number,
        public readonly int    $pieces,
        public readonly int    $price,
        public readonly string $type,
        public readonly string $description,
        public readonly array  $pictures,
    )
    {
    }

    public static function formRequest(FormRequest $request): \App\Interface\DataTransfertObject
    {
        return new self(
            rooms_number: $request->validated('rooms_number'),
            pieces: $request->validated('pieces'),
            price: $request->validated('price'),
            type: $request->validated('type'),
            description: $request->validated('description'),
            pictures: $request->validated('pictures'),
        );
    }

    public function toArray(): array
    {
        return [
            'rooms_number' => $this->rooms_number,
            'pieces' => $this->pieces,
            'price' => $this->price,
            'type' => $this->type,
            'description' => $this->description,
        ];
    }
}
