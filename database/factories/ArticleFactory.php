<?php

use Faker\Generator as Faker;

use App\Article;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title' => $faker->words(4, true),
        'subtitle' =>  $faker->sentence(5),
        'description' =>  $faker->text(150),
        'body' =>  $faker->paragraphs(8, true)
    ];
});
