clear<?php

use Faker\Generator as Faker;

$factory->define(App\Room::class, function (Faker $faker) {
    return [
        'roomNumber' => rand(1,10),
        'building' => (substr(str_shuffle(str_repeat("ABCD",4)),0,1))."".rand(1,4),
        'floor' =>  $faker->randomElement(['1st','2nd','3rd','4th'])
    ];
});
