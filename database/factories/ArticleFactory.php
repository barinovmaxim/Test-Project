<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Article::class, function (Faker $faker) {
    $title = $faker->text(30);
    $slug = Str::slug($title, '-');
    $created_at = $faker->dateTime();

    return [
        'title' => $title,
        'slug' => $slug,
        'content' => $faker->text(200),
        'created_at' => $created_at,

    ];
});
