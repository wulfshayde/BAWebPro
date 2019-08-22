<?php

use Illuminate\Database\Seeder;

class UserItemTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('item_user_types')->insert([
          'item_user_type' => 'Owner',
          'description' => 'This user is the owner of this item.'
        ]);

        DB::table('item_user_types')->insert([
          'item_user_type' => 'Subject Matter Expert',
          'description' => 'This user is considered the subject matter expert for this item.'
        ]);
    }
}
