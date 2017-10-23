<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(LancheNinja\Models\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(LancheNinja\Models\Category::class,function(Faker $faker){

    return [
        'name' => $faker->word
    ];

});

$factory->define(LancheNinja\Models\Product::class,function(Faker $faker){

    return [
        'name' => $faker->word,
        'description'=> $faker->sentence,
        'price'=> $faker->numberBetween(10,50),
    ];

});

$factory->define(LancheNinja\Models\Client::class,function(Faker $faker){

    return [
        'phone' => $faker->phoneNumber,
        'address'=> $faker->address,
        'city' => $faker->city,
        'state'=> $faker->state,
        'zipcode' => $faker->postcode,
    ];

});
