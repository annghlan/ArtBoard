<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Collection::class, function (Faker $faker) {
    return [
        'name'=> $faker->word,
        'front'=>'assets/img/2.jpg',
        'back'=>'assets/img/1.jpg',
        'size'=>$faker->numberBetween($min=18, $max=45)
        ];
});
