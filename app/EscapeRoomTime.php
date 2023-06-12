<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EscapeRoomTime extends Model
{
    use HasFactory;

    protected $gurded= [];

    public function escapeRoom()
    {
        return $this->belongsTo(EscapeRoom::class, 'escape_room_id');
    }


}
