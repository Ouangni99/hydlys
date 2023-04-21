<?php

namespace App\Interface;

use Illuminate\Foundation\Http\FormRequest;

interface DataTransfertObject
{
    public static function formRequest(FormRequest $request): self;

    public function toArray(): array;
}
