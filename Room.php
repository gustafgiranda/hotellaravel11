<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Room extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function roomTipe(): BelongsTo{
        return $this->belongsTo(RoomTipe::class);
    }

    public function bookings(): HasMany{
        return $this->hasMany(Booking::class);
    }
}
