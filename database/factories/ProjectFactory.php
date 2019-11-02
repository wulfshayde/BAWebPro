<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Project;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
    return [
        'tag' => $faker->word,
        'project' => $faker->sentence(5),
        'description' => $faker->text(200),
        'is_active' => $faker->boolean,
        'is_default' => $faker->boolean,
        'created_on' => now(),
        'estimated_completion_on' => $faker->dateTimeThisDecade,
        'company_id' => App\Company::all()->random()->id
    ];
});
