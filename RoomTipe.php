<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RoomTipe extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function rooms(): HasMany{
        return $this->hasMany(Room::class);
    }
    public function bookings(): HasMany{
        return $this->hasMany(Booking::class);
    }
}
