<?php

use App\Booking;
use App\Ride;
use App\User;
use Faker\Generator as Faker;

$factory->define(Booking::class, function (Faker $faker) {
    $ride = Ride::inRandomOrder()->first();
    $user = User::inRandomOrder()->first();
    return [
        'ride_id' => $ride->id,
        'user_id' => $user->id
    ];
});
