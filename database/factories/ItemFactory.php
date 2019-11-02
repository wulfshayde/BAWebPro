<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Item;
use Faker\Generator as Faker;

$factory->define(Item::class, function (Faker $faker) {
    return [
        'tag' => $faker->word,
        'title' => $faker->realText(20),
        'description' => $faker->realText(),
        'notes' => $faker->realText(),
        'technical_specification' => $faker->realText(),
        'project_id' => App\Project::all()->random()->id,
        'priority_id' => App\Priority::all()->random()->id,
        'status_id' => App\Status::all()->random()->id
    ];
});
