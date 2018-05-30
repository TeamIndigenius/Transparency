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
        $this->call(UsersTableSeeder::class);
        $this->call(PositionsTableSeeder::class);
        $this->call(OrganizationsTableSeeder::class);
        $this->call(ArchivesTableSeeder::class);
        // factory(App\User::class, 10)->create();
    }
}
