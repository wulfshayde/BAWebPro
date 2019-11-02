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
          StatusesTableSeeder::class,
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
            RequirementTypesTableSeeder::class,
        ]);

        //Companies
        //factory(App\Company::class, 2)->create();
        //Projects
        //factory(App\Project::class, 4)->create();
        //Items
        factory(App\Item::class, 20)->create();
        //User Stories
        factory(App\UserStory::class, 100)->create();
        //Requirements
        factory(App\Requirement::class, 300)->create();
        //Use Cases
        //factory(App\UseCase::class, 1500)->create();
    }
}
