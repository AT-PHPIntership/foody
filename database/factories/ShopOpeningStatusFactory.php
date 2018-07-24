<?php

use Faker\Generator as Faker;

$factory->define(App\Models\ShopOpeningStatus::class, function (Faker $faker) {
    return [
        'store_id' => App\Models\Store::all()->random()->id,
        'time_open' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'time_close' => $faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});
