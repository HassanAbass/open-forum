<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Thread;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Thread::class, function (Faker $faker) {
    return [
        'user_id' => function(){
          return factory(User::class)->create()->id;
        },
        'title' => $faker->sentence,
        'body' => $faker->paragraph
    ];
});
