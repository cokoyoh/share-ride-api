<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['ride_id','user_id'];

    public function ride()
    {
        return $this->belongsTo(Ride::class);
    }
}
