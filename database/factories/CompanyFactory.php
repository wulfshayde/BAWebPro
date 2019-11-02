<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Company;
use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {
    return [
        'company' => $faker->company,
        'business_number' => $faker->unique()->numberBetween(10000000,99999999),
        'contact_name' => $faker->name,
        'contact_name_accounts' => $faker->name,
        'phone' => $faker->phoneNumber,
        'fax' => $faker->phoneNumber,
        'email' => $faker->unique()->companyEmail,
        'email_accounts' => $faker->unique()->companyEmail,
        'added_on' => now(),
        'active' => true
    ];
});
