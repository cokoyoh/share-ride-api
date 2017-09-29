<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Mail\RideConfirmationMail;
use App\Ride;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

        /**
         * Send confirmation email here
         */

        $user = $request->user();
        Mail::to($user->email)->send(new RideConfirmationMail($ride,$user));

        return response(['message' => 'You have successfully booked a ride. Thank you.'],200);
    }
}
