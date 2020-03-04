<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Categories;
use App\Model;
use App\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Post::class, function (Faker $faker) {
    $title = $faker->sentence(10);
    return [
        'title' => '',
        'slug' => Str::slug($title),
        'subtitle' => $faker->sentence(10),
        'description' => $faker->paragraph(5),
        'publish_at' => $faker->dateTime(),
        'category' => function(){
            return factory(Categories::class)->create()->id; //retorna o id 
        }
    ];
});
