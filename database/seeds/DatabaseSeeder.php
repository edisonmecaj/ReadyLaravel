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
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(MenusRolesTableSeeder::class);
        $this->call(LangsTableSeeder::class);
        $this->call(LangsWordsTableSeeder::class);
        $this->call(RolesTilesTableSeeder::class);
    }
}