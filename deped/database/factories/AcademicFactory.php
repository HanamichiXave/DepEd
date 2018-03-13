<?php

use Faker\Generator as Faker;

$factory->define(App\Academic::class, function (Faker $faker) {
    return [
        'classId' => rand(1, 10),
        'studentId' => rand(1, 40)
    ];
});
