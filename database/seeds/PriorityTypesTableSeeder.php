<?php

use Illuminate\Database\Seeder;

class PriorityTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('priority_types')->insert([
          'priority_type' => 'Default'
        ]);
    }
}
