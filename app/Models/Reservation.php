<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $table = 'reservations';

    // $dates プロパティを追加して、日付フィールドを Carbon インスタンスにキャストする
    protected $dates = ['check_in', 'check_out'];

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

