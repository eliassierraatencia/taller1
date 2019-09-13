<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Cliente;
use Faker\Generator as Faker;

$factory->define(Cliente::class, function (Faker $faker) {
    return [
        'nombre' => $faker->company,
        'direccion' => $faker->address,
        'telefono' => $faker->tollFreePhoneNumber
    ];
});
