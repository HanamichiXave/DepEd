<?php

use Faker\Generator as Faker;
use App\Gate;

$factory->define(Gate::class, function (Faker $faker) {
    return [
        'studentId' => rand(1, 10),
        'remarks' => rand(0, 1),
    ];
});
