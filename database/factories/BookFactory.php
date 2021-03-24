<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
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

$factory->define(Book::class, function (Faker $faker) {
    return [
        'title' => $faker->city,
        'author' => Str::random(10),
        'isbn' => $faker->isbn13,
        'description' => $faker->sentence,
        'publisher' => $faker->company,
        'published_year' => $faker->year,
        'imgURL' => "https://images-na.ssl-images-amazon.com/images/I/81UhfqJ0Z3L.jpg",
        'buyURL' => $faker->url,
    ];
});
