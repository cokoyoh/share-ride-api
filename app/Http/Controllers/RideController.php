<?php

namespace App\Http\Controllers;

use App\Ride;
use App\State;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Vinkla\Pusher\Facades\Pusher as LaravelPusher;

class RideController extends Controller
{
    public function getAllRides()
    {
        $rides = Ride::all();
        return response(['data' => $rides],200);
    }

    public function getAvailableRides()
    {
        $available_rides = Ride::with('state','user')
                ->where('rides.state_id','=',1)
                ->whereDate('rides.dor', '>=', Carbon::today()->toDateString())
                ->orderBy('rides.id', 'desc')
                ->get();

        return response(['data'=> $available_rides],200);
    }

    public function addRide(Request $request)
    {
        $driver_id = $request->user()->id;
        Ride::create([
            'origin' => $request->input('origin'),
            'destination' => $request->input('destination'),
            'capacity' => $request->input('capacity'),
            'dor' => $request->input('dor'),
            'driver_id' =>  $driver_id,
            'state_id' => 1
        ]);
        return response(['message' => 'You have successfully added a ride.'],200);
    }

}
