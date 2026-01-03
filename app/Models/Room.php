<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Room extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'boarding_House_id',
        'name',
        'room_type',
        'square_feet',
        'capacity',
        'price_per_month',
        'is_available'
    ];

    public function boardingHouse()
    {
        return $this->belongTo(BoardingHouse::class);
    }

    public function Images()
    {
        return $this->hasMany(RoomImage::class);
    }

    public function transactions()
    {
        return $this->hasMany(Room::class);
    }
}
