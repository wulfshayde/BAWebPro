<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\UserStory;
use Faker\Generator as Faker;

$factory->define(UserStory::class, function (Faker $faker) {
    return [
        'tag' => $faker->word,
        'story' => 'As a User I need to be able to ' . $faker->sentence(4) . ' so that I can ' . $faker->sentence(4),
        'item_id' => App\Item::all()->random()->id,
        'priority_id' => App\Priority::all()->random()->id
    ];
});
