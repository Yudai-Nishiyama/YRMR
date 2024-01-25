<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Room extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'room_type_id', 'image', 'is_active'];

    public function roomType()
    {
        return $this->belongsTo(RoomType::class, 'room_type_id');
    }

<<<<<<< HEAD
=======
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
>>>>>>> 670c76bd9dba901b949c0229d7e77223fb8b4558
}


