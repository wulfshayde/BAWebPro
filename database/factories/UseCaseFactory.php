<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\UseCase;
use Faker\Generator as Faker;

$factory->define(UseCase::class, function (Faker $faker) {
    return [
//        $table->unsignedBigInteger('requirement_id');
//        $table->unsignedBigInteger('user_story_id');
//        $table->unsignedBigInteger('use_case_status_id');
//        $table->integer('failed_test_count')->default(0);
//        $table->integer('require_retest_count')->default(0);

        'requirement_id' => App\Requirement::all()->random()->id,
        'user_story_id' => App\UserStory::all()->random()->id,
        'use_case_status_id' => App\UseCaseStatus::all()->random()->id,
        'failed_test_count' => $faker->numberBetween(),
        'require_retest_count' => $faker->numberBetween()
    ];
});
