<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Clothes::class, function (Faker $faker) {
    return [
        'name'=> $faker->word,
        'price'=> $faker->numberBetween($min=20, $max=10000),
        'image'=>'assets/img/7.jpg',
        'size'=>$faker->numberBetween($min=18, $max=45)
    ];
});
