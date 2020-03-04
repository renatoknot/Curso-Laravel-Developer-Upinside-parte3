<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Categories;
use App\Model;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Categories::class, function (Faker $faker) {
    $title = $faker->sentence(10);
    return [
        'title' => $title,
        'slug' => Str::slug($title)
    ];
});
