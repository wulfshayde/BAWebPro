<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
          CompaniesTableSeeder::class,
          UserGroupsTableSeeder::class,
          UserTypesTableSeeder::class,
          UserRolesTableSeeder::class,
          PriorityTypesTableSeeder::class,
          PrioritiesTableSeeder::class,
          PriorityDescriptionsTableSeeder::class,
          ItemGroupTypesTableSeeder::class,
          ProjectsTableSeeder::class,
          UseCaseStatusesTableSeeder::class,
          UsersTableSeeder::class,
        ]);
    }
}
