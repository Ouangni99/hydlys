<?php

namespace App\Http\Requests\Room;

use Illuminate\Foundation\Http\FormRequest;

class RoomCreateRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'rooms_number' => ['required'],
            'pieces' => ['required'],
            'price' => ['required'],
            'type' => ['required'],
            'description' => ['required'],
            'pictures' => ['required']
        ];
    }
}
