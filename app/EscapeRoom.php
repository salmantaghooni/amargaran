<?php

namespace App;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class EscapeRoom extends Model
{
    use HasFactory;

    protected $table ='escape_rooms';
    protected $gurded = [];



    public function escapeRoomTime()
    {
        return $this->hasMany(EscapeRoomTime::class);
    }

}
