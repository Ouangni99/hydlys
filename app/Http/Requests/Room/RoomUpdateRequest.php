<?php

namespace App\Http\Requests\Room;

use Illuminate\Foundation\Http\FormRequest;

class RoomUpdateRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'rooms_number' => ['required'],
            'pieces' => ['required'],
            'price' => ['required'],
            'type' => ['required'],
            'description' => ['required'],
            'pictures' => [''],
        ];
    }
}
