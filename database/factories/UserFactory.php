<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Subject;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        
        
        'password' => Hash::make('12345678'), // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(Subject::class, function (Faker $faker) {
    return [
        'code' => $faker->numerify('TCS-###'),
        'name' => 'Basics '.$faker->word
    ];
});


$factory->define(App\Student::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        
        'rollNo'=> $faker->numerify('160970######'),
       
    ];
});