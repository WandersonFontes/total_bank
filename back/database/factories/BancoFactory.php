<?php
use App\Models\banco;
use Faker\Generator as Faker;

$factory->define(banco::class, function (Faker $faker) {
    return [
        'cliente' => $faker->name,
        'conta' => $faker->numberBetween($min = 10000000, $max = 99999999),
        'saldo' => $faker->randomFloat(5, 0, 9999)
    ];
});
