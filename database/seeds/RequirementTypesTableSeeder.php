<?php

use Illuminate\Database\Seeder;

class RequirementTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $table->string('type');
//        $table->string('description');

        DB::table('requirement_types')->insert([
            'type' => 'Business',
            'description' => 'Eg: reduce incorrectly processed orders by 50% by the end of the next quarter.'
        ]);
        DB::table('requirement_types')->insert([
            'type' => 'User/Stakeholder',
            'description' => 'Eg: add new customer account, view order history'
        ]);
        DB::table('requirement_types')->insert([
            'type' => 'Functional/Solution',
            'description' => 'Eg: display customer last name as a link to account history'
        ]);
        DB::table('requirement_types')->insert([
            'type' => 'Non-Functional',
            'description' => 'Eg: allow up to 200 concurrent users'
        ]);
        DB::table('requirement_types')->insert([
            'type' => 'Implementation/Transition',
            'description' => 'Eg: Users must pass an online certification before being allowed to use the system'
        ]);
    }
}
