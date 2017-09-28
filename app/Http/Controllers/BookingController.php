<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Ride;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function bookRide(Request $request)
    {
        $ride_id = $request->input('id');
        $user_id = $request->user()->id;

        Booking::create([
            'ride_id' => $ride_id,
            'user_id' => $user_id
        ]);

        $ride = Ride::find($ride_id);
        $ride->state_id = 2;
        $ride->save();

        return response(['message' => 'You have successfully booked a ride. Than you.'],200);
        /**
         * Send confirmation email here
         */
    }
}
