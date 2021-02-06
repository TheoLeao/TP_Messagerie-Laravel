<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Message;
use Faker\Generator as Faker;

$factory->define(Message::class, function (Faker $faker) {
    return [
        "content" => $this->faker->sentence($nbWords = 10, $variableNbWords = true)
    ];
});
