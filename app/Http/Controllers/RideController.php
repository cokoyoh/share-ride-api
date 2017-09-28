<?php

namespace App\Http\Controllers;

use App\Ride;
use Illuminate\Http\Request;

class RideController extends Controller
{
    public function getAllRides()
    {
        $rides = Ride::all();
        return response(['data' => $rides],200);
    }

    public function getAvailableRides()
    {
        $available_rides = Ride::with('state')->where('state_id','=',1)->get();
        return response(['data'=> $available_rides],200);
    }

}
