<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $table = 'reservations';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cleaning()
    {
        return $this->hasMany(Cleaning::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function reservationTask()
    {
        return $this->hasMany(ReservationTask::class);
    }

}

