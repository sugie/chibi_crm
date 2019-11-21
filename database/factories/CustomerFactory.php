<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'shop_id' => mt_rand(1, 3),
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'postal' => $faker->postcode,
        'address' => $faker->address,
        'birthdate' => $faker->dateTimeBetween('-90 years', '-18 years'),
        'phone'=> $faker->phoneNumber,
        'kramer_flag' => 0,
    ];
});
