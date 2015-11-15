<?php

use CodeDelivery\Models\User;
use CodeDelivery\Models\Client;
use CodeDelivery\Models\Category;
use CodeDelivery\Models\Product;

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

$factory->define(User::class, function (Faker\Generator $faker) 
{
    return [
        'name' 				=> $faker->name,
        'email' 			=> $faker->email,
        'password' 			=> bcrypt(str_random(10)),
        'remember_token' 	=> str_random(10),
    ];
});


$factory->define(Category::Class, function(Faker\Generator $faker) 
{
	return [
		'name' => $faker->word
	];
});


$factory->define(Client::Class, function(Faker\Generator $faker) 
{
	return [
		'phone' 	=> $faker->phoneNumber,
		'address' 	=> $faker->address,
		'city' 		=> $faker->city,
		'state' 	=> $faker->state,
		'zipcode' 	=> $faker->postcode,
	];
});

	
$factory->define(Product::Class, function(Faker\Generator $faker) 
{
	return [
		'name' 			=> $faker->word,
		'description' 	=> $faker->sentence,
		'price' 		=> $faker->numberBetween(10, 50)
	];
});

