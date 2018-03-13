<?php

use Faker\Generator as Faker;
use App\StudClass;

$factory->define(StudClass::class, function (Faker $faker) {
    return [
        'sectionId' => rand(1, 4),
        'subject' => $faker->randomElement(['Math', 'Science', 'Filipino', 'English', 'Arts']),
        'timeStart' => $faker->date('H:i'),
        'timeEnd' => $faker->date('H:i'),
        'schedule' => $faker->randomElement(['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday']),
        'teacherId' => rand(1, 4),
        'roomId' => rand(1, 3),
    ];
});