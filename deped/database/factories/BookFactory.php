<?php

use Faker\Generator as Faker;
use App\Library;

$factory->define(Library::class, function (Faker $faker) {
    return [
        'rfid' => rand(1000,9999),
        'title' => $faker->company,
        'material_type' =>  $faker->randomElement(['Sports', 'Literature', 'Science', 'Technology', 'Programming']),
        'title_statement' => $faker->sentence,
        'isbn' => rand(10000, 99999),
        'date_published' => $faker->date('Y-m-d'),
        'author' => $faker->name,
        'publisher' => $faker->company,
        'publication' => $faker->city,
        'general_info' => $faker->sentence,
        'physical_description' =>  $faker->randomElement(['good','sligthly damaged']),
        'vol_year' => $faker->year,
        'collection_category' =>  $faker->randomElement(['Sports', 'Literature', 'Science', 'Technology', 'Programming']),
        'price' => rand(100,5000)
    ];
});
