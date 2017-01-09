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
    return [
        'api_token'=>str_random(30)
    ];
});

$factory->define(App\Organization::class, function (Faker\Generator $faker) {
    return [
        'name'=>$faker->company,
        'account_created_date'=>$faker->DateTime->format('Y-m-d')
    ];
});