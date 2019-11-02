<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Requirement;
use Faker\Generator as Faker;

$factory->define(Requirement::class, function (Faker $faker) {
    return [
        'tag' => $faker->word,
        'requirement' => $faker->sentence(),
        'project_id' => App\Project::all()->random()->id,
        'priority_id' => App\Priority::all()->random()->id,
        'requirement_type_id' => App\RequirementType::all()->random()->id
    ];
});
