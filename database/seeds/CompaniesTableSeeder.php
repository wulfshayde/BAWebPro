<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
          'company' => 'Default',
          'business_number' => '0',
          'contact_name' => 'Jeff Lester',
          'contact_name_accounts' => 'Jeff Lester',
          'phone' => '0',
          'fax' => '0',
          'email' => 'jeff@baweb.com',
          'email_accounts' => 'accounts@baweb.com',
          'added_on' => Carbon\Carbon::now(),
          'active' => true
        ]);
    }
}
