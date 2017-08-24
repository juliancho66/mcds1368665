<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Centro::class, function (Faker\Generator $faker) {
    

    return [
        'nombre' => $faker->sentence(2),
        'descripcion' => $faker->text(250),

    ];
});

$factory->define(App\Especialidad::class, function (Faker\Generator $faker) {
    

    return [
        'nombre' => $faker->sentence(2),
        'descripcion' => $faker->text(250),

    ];
});