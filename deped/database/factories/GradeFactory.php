<?php

use Faker\Generator as Faker;

$factory->define(App\Grade::class, function (Faker $faker) {
    return [
        'label' => 'Grade '.rand(1, 4),
    ];
});
