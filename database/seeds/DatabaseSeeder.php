<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(PlacesTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(StatisticsGeneralTableSeeder::class);
        $this->call(AverageStatisticsTableSeeder::class);
        $this->call(GeneralPositionsTableSeeder::class);
        $this->call(IndividualPositionsTableSeeder::class);
        $this->call(TeamsTableSeeder::class);
        $this->call(TabsTableSeeder::class);
        $this->call(TournamentsTypesTableSeeder::class);
        $this->call(TournamentsTableSeeder::class);
        $this->call(ActivitiesTableSeeder::class);
        $this->call(PromotionsTableSeeder::class);
    }
}
