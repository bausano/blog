<?php

use Faker\Generator as Faker;

use App\Article;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title' => $faker->words(3, true),
        'subtitle' =>  $faker->sentence(4),
        'description' =>  $faker->text(150),
        'body' =>  $faker->paragraphs(8, true)
    ];
});
