<?php

    /** @var \Illuminate\Database\Eloquent\Factory $factory */
    use App\Component;
    use Faker\Generator as Faker;
    use Illuminate\Support\Str;

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

    $factory->define(Component::class, function (Faker $faker) {
        return [
            'name' => $faker->name,
            'created_at' => now(),
	        'type' => 'Other',
            'price' => rand(10, 300),
            'shop' => '#',
            'cosplay_id' => rand(45, 59)

        ];
    });
