<?php

use Faker\Generator as Faker;
use App\Student;

$factory->define(Student::class, function (Faker $faker) {
    $gender = substr(str_shuffle(str_repeat("MF",2)),0,1);
    return [
        'cardNumber' => substr(str_shuffle(str_repeat("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890",rand(1,10))),0,50),
        'firstName' => $faker->firstName($gender),
        'middleName' => $faker->lastName,
        'lastName' => $faker->lastName,
        'gender' => $gender
    ];
});