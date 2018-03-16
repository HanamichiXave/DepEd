<?php

use Faker\Generator as Faker;

$factory->define(App\StudSection::class, function (Faker $faker) {
    return [
        'sectionId'     => rand(1, 3),
        'studentId'     => rand(1, 3)
    ];
});
