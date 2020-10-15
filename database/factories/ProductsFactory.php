<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\products;
use Faker\Generator as Faker;

$factory->define(products::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'precio'=>$faker->percio,
        'descripcion'=>$faker->descripcion,
        
    ];
});
