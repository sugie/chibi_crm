<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CustomerLog;
use Faker\Generator as Faker;

$factory->define(CustomerLog::class, function (Faker $faker) {
    return [
        'customer_id' => mt_rand(1, 30),
        'user_id' => mt_rand(1, 4),
        'log' => $faker->sentence(40),
    ];
});
