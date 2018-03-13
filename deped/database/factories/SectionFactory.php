<?php

use Faker\Generator as Faker;

$factory->define(App\Section::class, function (Faker $faker) {
    return [
        'gradeId' => rand(1, 4),
        'label' => $faker->randomElement(['Section A', 'Section B', 'Section C', 'Section D']),
        'teacherId' => rand(1, 3),
    ];
});
