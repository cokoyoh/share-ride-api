<?php

use App\Ride;
use App\State;
use App\User;
use Faker\Generator as Faker;

$factory->define(Ride::class, function (Faker $faker) {
    $user = User::inRandomOrder()->first();
    $state = State::inRandomOrder()->first();
    return [
        'origin' => $faker->city,
        'destination' => $faker->city,
        'capacity' => $faker->randomNumber(2,true),
        'driver_id' => $user->id,
        'state_id' => $state->id
    ];
});
