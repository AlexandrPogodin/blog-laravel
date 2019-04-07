<?php

use Faker\Generator as Faker;
use App\Article;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(3),
        'author' => $faker->name,
        'text' => $faker->text(1000),
    ];
});
