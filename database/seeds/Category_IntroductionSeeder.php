<?php

use Illuminate\Database\Seeder;

class Category_IntroductionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('category_introduction')->insert([
            'id' => '1',
            'introduction_id' => '1',
            'category_id' => '1',
            'created_at' => '2020-11-01 06:03:28',
        ]);
        \Illuminate\Support\Facades\DB::table('category_introduction')->insert([
            'id' => '2',
            'introduction_id' => '1',
            'category_id' => '2',
            'created_at' => '2020-11-01 06:03:28',
        ]);
    }
}
