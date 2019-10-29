<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    $disciplines = collect([
        'Kontor',
        'Mekaniker',
        'Specialmekaniker',
        'Inspektør',
        'Fragt',
    ]);

    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'phonenumber' => $faker->numberBetween(10000000, 80000000),
        'disciplines' => $disciplines->shuffle()->take($faker->numberBetween(1, 2)),
        'employed_at' => now(),
    ];
});
