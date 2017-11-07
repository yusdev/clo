<?php

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

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'lastname' => $faker->lastname,
        'email' => $faker->unique()->safeEmail,
        'role' => $name = $faker->randomElement(['admin', 'editor', 'author']),
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

//Category model factory
$factory->define(App\Category::class, function (Faker $faker){
  return [
      'name' => $name = $faker->randomElement(['moda', 'tecnologia', 'turismo']),
      'slug' => str_slug($name)
  ];
});

// Post Model Factory
$factory->define(App\Post::class, function (Faker $faker) {
    $title = $faker->name;
    return [
        'title' => $title,
        'slug'  => str_slug($title),
        'image' => 'https://dummyimage.com/300',
        'abstract' => implode(' ', $faker->paragraphs(1)),
        'description' => implode(' ', $faker->paragraphs(5)),
    ];
});
