<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('roles')->insert([
            'id' => '1',
            'name' => 'Super Admin',
            'status' => 1,
        ]);
    }
}
