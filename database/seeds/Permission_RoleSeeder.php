<?php

use Illuminate\Database\Seeder;

class Permission_RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 58; $i++) {

            \Illuminate\Support\Facades\DB::table('permission_role')->insert([
                'permission_id' => 1 + $i,
                'role_id' => '1',
            ]);
        }

    }
}
