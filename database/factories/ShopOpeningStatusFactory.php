<?php

use Faker\Generator as Faker;

$factory->define(App\Models\ShopOpeningStatus::class, function (Faker $faker) {
    return [
        'time_open' =>  $faker->time($format = 'H:i'),
        'time_close' =>  $faker->time($format = 'H:i'),
    ];
});
