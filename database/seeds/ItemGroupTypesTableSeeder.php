<?php

use Illuminate\Database\Seeder;

class ItemGroupTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('item_group_types')->insert([
        'item_group_type' => 'Authors',
        'description' => 'A group of users that create or generate information for this item.'
      ]);

      DB::table('item_group_types')->insert([
        'item_group_type' => 'Consumers',
        'description' => 'A group of users that consume or user the information created by the authors for this item.'
      ]);
    }
}
