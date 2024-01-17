<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationTask extends Model
{
    use HasFactory;

    protected $table = 'reservation_task';

    protected $fillable = ['reservation_id','task_id' ];

    public $timestamps = false;
}
