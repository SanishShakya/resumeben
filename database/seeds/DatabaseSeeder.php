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

        $this->call(RolesSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(IntroductionsSeeder::class);
        $this->call(ModuleSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(Permission_RoleSeeder::class);
    }
}
