<?php

use Illuminate\Database\Seeder;

class PrioritiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('priorities')->insert(['priority' => 'Wont', 'value' => 1, 'company_id' => 1]);
        DB::table('priorities')->insert(['priority' => 'Could', 'value' => 2, 'company_id' => 1]);
        DB::table('priorities')->insert(['priority' => 'Should', 'value' => 3, 'company_id' => 1]);
        DB::table('priorities')->insert(['priority' => 'Must', 'value' => 4, 'company_id' => 1]);
    }
}
