<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cleaning extends Model
{
    use HasFactory;

    protected $table = 'cleaning';

    protected $fillable = ['user_id', 'reservation_id'];

    public $timestamps = false;
}
