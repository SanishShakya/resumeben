<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('categories')->insert([
            'id' => '1',
            'name' => 'Web Developer',
            'slug' => 'web_developer',
            'status' => '1',
            'created_by' => '2',
            'created_at' => '2020-11-01 06:03:28',
        ]);
        \Illuminate\Support\Facades\DB::table('categories')->insert([
            'id' => '2',
            'name' => 'Web Designer',
            'slug' => 'web_designer',
            'status' => '1',
            'created_by' => '2',
            'created_at' => '2020-11-01 06:03:28',
        ]);
    }
}
