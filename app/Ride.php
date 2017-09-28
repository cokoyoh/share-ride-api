<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ride extends Model
{
    protected $fillable = ['origin','destination','capacity', 'driver_id', 'state_id', 'dor'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function booking()
    {
        return $this->hasOne(Booking::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
