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
        'url' => $faker->imageUrl(300, 300, 'people'),
        'role_id' => 2,
        'secret_question' => '',
        'secret_answer' => '',
    ];
});

$factory->define(App\Team::class, function(Faker\Generator $faker) {
    return [ 
		'category_id' => $faker->randomElement($array = array (1,2,3,4,5,6,7)),
		'name' => $faker->words(2, true),
		'shield' => $faker->imageUrl(200, 200, 'people'),
		'coach' => $faker->firstNameMale,
		'created_at' => $faker->dateTimeThisYear,
        'updated_at' => $faker->dateTimeThisYear,
	];
});
