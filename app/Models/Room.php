<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\UploadedFile;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'rooms_number',
        'price',
        'pieces',
        'type',
    ];

//    protected $casts = [
//        'type' => RoomType::class
//    ];

    public function getSlug(): string
    {
        return $this->type . ' ' . $this->rooms_number;
    }

    /**
     * @param UploadedFile[] $files
     */
    public function attachFiles(array $files)
    {
        $pictures = [];
        foreach ($files as $file) {
            if ($file->getError()) {
                continue;
            }
            $filename = $file->store('rooms/' . $this->id, 'public');
            $pictures[] = [
                'filename' => $filename
            ];
        }
        if (count($pictures) > 0) {

            $this->pictures()->createMany($pictures);

        }
    }

    public function pictures(): HasMany
    {
        return $this->hasMany(Picture::class);
    }

    public function getPicture(): ?Picture
    {
        return $this->pictures[0] ?? null;
    }
}
