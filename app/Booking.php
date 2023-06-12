<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table ='bookings';

    protected $gurded = [];


    protected $fillable = [
        'user_id','escape_room_id','escape_room_time_id','amount','discount'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'booking_id');
    }
}
