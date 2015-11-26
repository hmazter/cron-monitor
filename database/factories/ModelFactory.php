<?php

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Monitor::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
        'allowed_runtime' => $faker->numberBetween(0, 5000),
    ];
});

$factory->define(App\Models\Integration::class, function (Faker\Generator $faker) {
    return [
        'type' => 'email',
        'name' => $faker->word,
        'settings' => ''
    ];
});