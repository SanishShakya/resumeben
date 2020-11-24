<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('users')->insert([
            'id' => '2',
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'role_id' => '1',
        ]);
          }
}
