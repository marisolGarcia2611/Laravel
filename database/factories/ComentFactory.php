<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\coment;
use Faker\Generator as Faker;

$factory->define(coment::class, function (Faker $faker) {
    return [
       'mensaje'=>$faker->mensaje,
       'product_id'=> App\products::all()->random()->id,
    ];
});
