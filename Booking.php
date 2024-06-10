<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    use HasFactory;


    protected $guarded = [];

    public function roomTipe(): BelongsTo{
        return $this->belongsTo(RoomTipe::class);
    }
    public function room(): BelongsTo{
        return $this->belongsTo(Room::class);
    }
}
