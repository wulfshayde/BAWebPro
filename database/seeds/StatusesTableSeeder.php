<?php

use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert([
          'status' => 'New',
          'description' => 'Newly created',
          'value' => 0,
            'colour' => '#d9534f'
        ]);
        DB::table('statuses')->insert([
          'status' => 'In Progress',
          'description' => 'Work in progress',
          'value' => 1,
            'colour' => '#f0ad4e'
        ]);
        DB::table('statuses')->insert([
          'status' => 'Parked',
          'description' => 'Work has been parked',
          'value' => 2,
            'colour' => '#f7f7f7'
        ]);
        DB::table('statuses')->insert([
          'status' => 'Complete',
          'description' => 'Work is complete',
          'value' => 2,
            'colour' => '#5cb85c'
        ]);
        DB::table('statuses')->insert([
          'status' => 'Cancelled',
          'description' => 'Cancelled',
          'value' => -1,
            'colour' => '#292b2c'
        ]);
    }
}
