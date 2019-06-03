<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'title'=>$faker->title,
        'author'=>$faker->name(),
        'ISBN'=>$faker->numberBetween(12,13),
        'category'=>$faker->word,
        'pages'=>rand(10,500),
        'year'=>rand(1999,2019),
        'language'=>$faker->languageCode,
        'description'=>$faker->text(500),
        'price'=>rand(0.0,999.9)
    ];
});
