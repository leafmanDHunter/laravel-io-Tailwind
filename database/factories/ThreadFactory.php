<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Thread;
use Faker\Generator as Faker;

$factory->define(Thread::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(15, true),
        'preview' => $faker->text,
        'author' => $faker->name,
        'reply_count' => $faker->numberBetween($min = 0, $max = 40),
        'tags' => $faker->randomElement(['Database', 'Authenticated', 'Cache']),
    ];
});
