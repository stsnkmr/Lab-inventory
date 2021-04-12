<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\User;
use Faker\Generator as Faker;

$factory->define(App\Item::class, function (Faker $faker) {
    if (!User::exists())
    {
        factory(User::class)->create();
    }
    return [
        'name' => $faker->name(),
        'quantity' => random_int(1, 100),
        'selling_user_id' => User::inRandomOrder()->first()->id,
        'price' => random_int(100, 10000),
        'description' => $faker->paragraph(),
        'image_name' => '600400.png',
    ];
});
