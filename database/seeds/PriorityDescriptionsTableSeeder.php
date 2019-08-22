<?php

use Illuminate\Database\Seeder;

class PriorityDescriptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('priority_descriptions')->insert([
          'priority_id' => 1,
          'priority_type_id' => 1,
          'description' => 'Wont have this time around.'
        ]);

        DB::table('priority_descriptions')->insert([
          'priority_id' => 2,
          'priority_type_id' => 1,
          'description' => 'Could have this time around if time/resources permit.'
        ]);

        DB::table('priority_descriptions')->insert([
          'priority_id' => 3,
          'priority_type_id' => 1,
          'description' => 'Should have this time around if time/resources permit.'
        ]);

        DB::table('priority_descriptions')->insert([
          'priority_id' => 4,
          'priority_type_id' => 1,
          'description' => 'Must have this time around.'
        ]);
    }
}
