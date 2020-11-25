<?php

use Illuminate\Database\Seeder;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('modules')->insert([
            'name' => 'User Management',
            'route' => 'backend.user.index',
            'status' => 1,
            'created_by' => 2,
        ]);
        \Illuminate\Support\Facades\DB::table('modules')->insert([
            'name' => 'Introduction Management',
            'route' => 'backend.introduction.index',
            'status' => 1,
            'created_by' => 2,
        ]);
        \Illuminate\Support\Facades\DB::table('modules')->insert([
            'name' => 'Faq Management',
            'route' => 'backend.faq.index',
            'status' => 1,
            'created_by' => 2,
        ]);
        \Illuminate\Support\Facades\DB::table('modules')->insert([
            'name' => 'Review Management',
            'route' => 'backend.review.index',
            'status' => 1,
            'created_by' => 2,
        ]);
        \Illuminate\Support\Facades\DB::table('modules')->insert([
            'name' => 'Permission Management',
            'route' => 'backend.permission.index',
            'status' => 1,
            'created_by' => 2,
        ]);

        \Illuminate\Support\Facades\DB::table('modules')->insert([
            'name' => 'Module Management',
            'route' => 'backend.module.index',
            'status' => 1,
            'created_by' => 2,
        ]);

        \Illuminate\Support\Facades\DB::table('modules')->insert([
            'name' => 'Role Management',
            'route' => 'backend.role.index',
            'status' => 1,
            'created_by' => 2,
        ]);
        \Illuminate\Support\Facades\DB::table('modules')->insert([
            'name' => 'Category Management',
            'route' => 'backend.category.index',
            'status' => 1,
            'created_by' => 2,
        ]);
    }
}
