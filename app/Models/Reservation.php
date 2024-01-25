<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
            'user_id',
            'room_id',
            'check_in',
            'check_out',
            'reservation_number',
            'guest_checkin',
            'guest_checkout',
    ];

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

