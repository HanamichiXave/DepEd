<?php

use Faker\Generator as Faker;

$factory->define(App\GateAttendance::class, function (Faker $faker) {
    $date = $faker->date('Y-m-d');
    $hour = rand(2,8);
    $minute = rand(0,59);
    return [
        'studentId' => rand(1,10),
        'dateIn' => $date,
        'TimeIn' => date('H:i', mktime($hour, $minute, 0, date('m'), date('d'), date('Y'))),
        'dateOut' => $date,
        'TimeOut' => date('H:i', mktime($hour + 6,$minute,  0, date('m'), date('d'), date('Y'))),
    ];
});
