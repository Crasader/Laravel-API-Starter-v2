<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */

$factory->define(\App\Models\Collection::class, function (\Faker\Generator $faker) {
    
    return [
        'title'       => $faker->word,
        'user_id'     => \App\Models\User::inRandomOrder()
                                         ->first()->id,
        'category_id' => $faker->numberBetween(1, 6),
        'slug'        => str_slug($faker->word),
        'score'       => $faker->numberBetween(1, 50000),
        'description' => $faker->paragraph,
        'year_start'  => $faker->numberBetween(1900, 2000),
        'year_end'    => $faker->numberBetween(1945, 2018),
        'created_at'  => $faker->dateTimeBetween('-1 week', 'now'),
        'updated_at'  => $faker->dateTimeBetween('-1 week', 'now')
    ];
    
});
