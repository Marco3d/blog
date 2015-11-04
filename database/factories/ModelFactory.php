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

$factory->defineAs(App\User::class, 'admin', function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt('123'),
        'type' => 'admin',
        'remember_token' => str_random(10),
    ];
});

$factory->defineAs(App\User::class, 'member', function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt('123'),
        'type' => 'member',
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Category::class, function ($faker) {
    return [
        'name' => $faker->word ,
        
    ];
});

$factory->define(App\Article::class, function ($faker) {
    return [
        'title'=>$faker->sentence,
        'content'=>$faker->paragraph,
        'tags' => $faker->word,
        'user_id' => App\User::all()->random()->id,
        'category_id' => App\Category::all()->random()->id,
    ];
});