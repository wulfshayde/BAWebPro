<?php

use Illuminate\Database\Seeder;

class UseCaseStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('use_case_statuses')->insert([
          'status' => 'Not Implemented',
          'description' => 'This use case has not yet been implemented in the project.',
          'value' => 0
        ]);

        DB::table('use_case_statuses')->insert([
          'status' => 'In Development',
          'description' => 'This use case is currently being implemented.',
          'value' => 1
        ]);

        DB::table('use_case_statuses')->insert([
          'status' => 'Implemented/Not Tested',
          'description' => 'This use case has been implemented, but not yet tested.',
          'value' => 2
        ]);

        DB::table('use_case_statuses')->insert([
          'status' => 'In Testing',
          'description' => 'This use case has been implemented and is currently being tested.',
          'value' => 3
        ]);

        DB::table('use_case_statuses')->insert([
          'status' => 'Tested/Failed - In Review',
          'description' => 'This use case implementation has failed testing and must be reviewed.',
          'value' => 4
        ]);

        DB::table('use_case_statuses')->insert([
          'status' => 'Tested/Failed - Will Not Review',
          'description' => 'This use case implementation has failed testing and will not be implemented.',
          'value' => 90
        ]);

        DB::table('use_case_statuses')->insert([
          'status' => 'Tested/Passed',
          'description' => 'This use case implementation has passed initial testing.',
          'value' => 6
        ]);

        DB::table('use_case_statuses')->insert([
          'status' => 'Complete',
          'description' => 'This use case implementation is considered complete.',
          'value' => 10
        ]);

        DB::table('use_case_statuses')->insert([
          'status' => 'Requires Review',
          'description' => 'There has been a change that requires this to be re-tested.',
          'value' => 50
        ]);

        DB::table('use_case_statuses')->insert([
          'status' => 'Cancelled',
          'description' => 'This use case implementation has been cancelled.',
          'value' => 6
        ]);
    }
}
