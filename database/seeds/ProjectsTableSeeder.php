<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
          'project' => 'Test Project',
          'description' => 'Project created for testing',
          'is_active' => true,
          'is_default' => true,
          'created_on' => Carbon\Carbon::now(),
          'estimated_completion_on' => Carbon\Carbon::now()->addYears(3),
          'company_id' => 1
        ]);
    }
}
