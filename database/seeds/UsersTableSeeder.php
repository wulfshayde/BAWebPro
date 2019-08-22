<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Jeff Lester',
            'email' => 'jeff@baweb.com',
            'email_verified_at' => now(),
            'password' => Hash::make('C12h22o11!'),
            'user_role_id' => 1,
            'user_type_id' => 1,
            'selected_project_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
