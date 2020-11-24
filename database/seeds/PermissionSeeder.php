<?php

use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('permissions')->insert([
            'name' => 'User Create',
            'route' => 'backend.user.create',
            'module_id' => 1,
            'status' => 1,
            'created_by' => 2,
        ]);
        \Illuminate\Support\Facades\DB::table('permissions')->insert([
            'name' => 'User Index',
            'route' => 'backend.user.index',
            'module_id' => 1,
            'status' => 1,
            'created_by' => 2,
        ]);
        \Illuminate\Support\Facades\DB::table('permissions')->insert([
            'name' => 'User Store',
            'route' => 'backend.user.store',
            'module_id' => 1,
            'status' => 1,
            'created_by' => 2,
        ]);
        \Illuminate\Support\Facades\DB::table('permissions')->insert([
            'name' => 'User Edit',
            'route' => 'backend.user.edit',
            'module_id' => 1,
            'status' => 1,
            'created_by' => 2,
        ]);
        \Illuminate\Support\Facades\DB::table('permissions')->insert([
            'name' => 'User Update',
            'route' => 'backend.user.update',
            'module_id' => 1,
            'status' => 1,
            'created_by' => 2,
        ]);
        \Illuminate\Support\Facades\DB::table('permissions')->insert([
            'name' => 'User Delete',
            'route' => 'backend.user.destroy',
            'module_id' => 1,
            'status' => 1,
            'created_by' => 2,
        ]);
        \Illuminate\Support\Facades\DB::table('permissions')->insert([
            'name' => 'User Show',
            'route' => 'backend.user.show',
            'module_id' => 1,
            'status' => 1,
            'created_by' => 2,
        ]);
        \Illuminate\Support\Facades\DB::table('permissions')->insert([
            'name' => 'Introduction Create',
            'route' => 'backend.introduction.create',
            'module_id' => 2,
            'status' => 1,
            'created_by' => 2,
        ]);
        \Illuminate\Support\Facades\DB::table('permissions')->insert([
            'name' => 'Introduction Index',
            'route' => 'backend.introduction.index',
            'module_id' => 2,
            'status' => 1,
            'created_by' => 2,
        ]);
        \Illuminate\Support\Facades\DB::table('permissions')->insert([
            'name' => 'Introduction Store',
            'route' => 'backend.introduction.store',
            'module_id' => 2,
            'status' => 1,
            'created_by' => 2,
        ]);
        \Illuminate\Support\Facades\DB::table('permissions')->insert([
            'name' => 'Introduction Edit',
            'route' => 'backend.introduction.edit',
            'module_id' => 2,
            'status' => 1,
            'created_by' => 2,
        ]);
        \Illuminate\Support\Facades\DB::table('permissions')->insert([
            'name' => 'Introduction Update',
            'route' => 'backend.introduction.update',
            'module_id' => 2,
            'status' => 1,
            'created_by' => 2,
        ]);
        \Illuminate\Support\Facades\DB::table('permissions')->insert([
            'name' => 'Introduction Delete',
            'route' => 'backend.introduction.destroy',
            'module_id' => 2,
            'status' => 1,
            'created_by' => 2,
        ]);
        \Illuminate\Support\Facades\DB::table('permissions')->insert([
            'name' => 'Introduction Show',
            'route' => 'backend.introduction.show',
            'module_id' => 2,
            'status' => 1,
            'created_by' => 2,
        ]);
        \Illuminate\Support\Facades\DB::table('permissions')->insert([
            'name' => 'Faq Create',
            'route' => 'backend.faq.create',
            'module_id' => 3,
            'status' => 1,
            'created_by' => 2,
        ]);
        \Illuminate\Support\Facades\DB::table('permissions')->insert([
            'name' => 'Faq Index',
            'route' => 'backend.faq.index',
            'module_id' => 3,
            'status' => 1,
            'created_by' => 2,
        ]);
        \Illuminate\Support\Facades\DB::table('permissions')->insert([
            'name' => 'Faq Store',
            'route' => 'backend.faq.store',
            'module_id' => 3,
            'status' => 1,
            'created_by' => 2,
        ]);
        \Illuminate\Support\Facades\DB::table('permissions')->insert([
            'name' => 'Faq Edit',
            'route' => 'backend.faq.edit',
            'module_id' => 3,
            'status' => 1,
            'created_by' => 2,
        ]);
        \Illuminate\Support\Facades\DB::table('permissions')->insert([
            'name' => 'Faq Update',
            'route' => 'backend.faq.update',
            'module_id' => 3,
            'status' => 1,
            'created_by' => 2,
        ]);
        \Illuminate\Support\Facades\DB::table('permissions')->insert([
            'name' => 'Faq Delete',
            'route' => 'backend.faq.destroy',
            'module_id' => 3,
            'status' => 1,
            'created_by' => 2,
        ]);
        \Illuminate\Support\Facades\DB::table('permissions')->insert([
            'name' => 'Faq Show',
            'route' => 'backend.faq.show',
            'module_id' => 3,
            'status' => 1,
            'created_by' => 2,
        ]);
        \Illuminate\Support\Facades\DB::table('permissions')->insert([
            'name' => 'Review Create',
            'route' => 'backend.review.create',
            'module_id' => 4,
            'status' => 1,
            'created_by' => 2,
        ]);
        \Illuminate\Support\Facades\DB::table('permissions')->insert([
            'name' => 'Review Index',
            'route' => 'backend.review.index',
            'module_id' => 4,
            'status' => 1,
            'created_by' => 2,
        ]);
        \Illuminate\Support\Facades\DB::table('permissions')->insert([
            'name' => 'Review Store',
            'route' => 'backend.review.store',
            'module_id' => 4,
            'status' => 1,
            'created_by' => 2,
        ]);
        \Illuminate\Support\Facades\DB::table('permissions')->insert([
            'name' => 'Review Edit',
            'route' => 'backend.review.edit',
            'module_id' => 4,
            'status' => 1,
            'created_by' => 2,
        ]);
        \Illuminate\Support\Facades\DB::table('permissions')->insert([
            'name' => 'Review Update',
            'route' => 'backend.review.update',
            'module_id' => 4,
            'status' => 1,
            'created_by' => 2,
        ]);
        \Illuminate\Support\Facades\DB::table('permissions')->insert([
            'name' => 'Review Delete',
            'route' => 'backend.review.destroy',
            'module_id' => 4,
            'status' => 1,
            'created_by' => 2,
        ]);
        \Illuminate\Support\Facades\DB::table('permissions')->insert([
            'name' => 'Review Show',
            'route' => 'backend.review.show',
            'module_id' => 4,
            'status' => 1,
            'created_by' => 2,
        ]);
        \Illuminate\Support\Facades\DB::table('permissions')->insert([
            'name' => 'Permission Create',
            'route' => 'backend.permission.create',
            'module_id' => 5,
            'status' => 1,
            'created_by' => 2,
        ]);
        \Illuminate\Support\Facades\DB::table('permissions')->insert([
            'name' => 'Permission Index',
            'route' => 'backend.permission.index',
            'module_id' => 5,
            'status' => 1,
            'created_by' => 2,
        ]);
        \Illuminate\Support\Facades\DB::table('permissions')->insert([
            'name' => 'Permission Store',
            'route' => 'backend.permission.store',
            'module_id' => 5,
            'status' => 1,
            'created_by' => 2,
        ]);
        \Illuminate\Support\Facades\DB::table('permissions')->insert([
            'name' => 'Permission Edit',
            'route' => 'backend.permission.edit',
            'module_id' => 5,
            'status' => 1,
            'created_by' => 2,
        ]);
        \Illuminate\Support\Facades\DB::table('permissions')->insert([
            'name' => 'Permission Update',
            'route' => 'backend.permission.update',
            'module_id' => 5,
            'status' => 1,
            'created_by' => 2,
        ]);
        \Illuminate\Support\Facades\DB::table('permissions')->insert([
            'name' => 'Permission Delete',
            'route' => 'backend.permission.destroy',
            'module_id' => 5,
            'status' => 1,
            'created_by' => 2,
        ]);
        \Illuminate\Support\Facades\DB::table('permissions')->insert([
            'name' => 'Permission Show',
            'route' => 'backend.permission.show',
            'module_id' => 5,
            'status' => 1,
            'created_by' => 2,
        ]);
        \Illuminate\Support\Facades\DB::table('permissions')->insert([
            'name' => 'Module Create',
            'route' => 'backend.module.create',
            'module_id' => 6,
            'status' => 1,
            'created_by' => 2,
        ]);
        \Illuminate\Support\Facades\DB::table('permissions')->insert([
            'name' => 'Module Index',
            'route' => 'backend.module.index',
            'module_id' => 6,
            'status' => 1,
            'created_by' => 2,
        ]);
        \Illuminate\Support\Facades\DB::table('permissions')->insert([
            'name' => 'Module Store',
            'route' => 'backend.module.store',
            'module_id' => 6,
            'status' => 1,
            'created_by' => 2,
        ]);
        \Illuminate\Support\Facades\DB::table('permissions')->insert([
            'name' => 'Module Edit',
            'route' => 'backend.module.edit',
            'module_id' => 6,
            'status' => 1,
            'created_by' => 2,
        ]);
        \Illuminate\Support\Facades\DB::table('permissions')->insert([
            'name' => 'Module Update',
            'route' => 'backend.module.update',
            'module_id' => 6,
            'status' => 1,
            'created_by' => 2,
        ]);
        \Illuminate\Support\Facades\DB::table('permissions')->insert([
            'name' => 'Module Delete',
            'route' => 'backend.module.destroy',
            'module_id' => 6,
            'status' => 1,
            'created_by' => 2,
        ]);
        \Illuminate\Support\Facades\DB::table('permissions')->insert([
            'name' => 'Module Show',
            'route' => 'backend.module.show',
            'module_id' => 6,
            'status' => 1,
            'created_by' => 2,
        ]);

        \Illuminate\Support\Facades\DB::table('permissions')->insert([
            'name' => 'Role Create',
            'route' => 'backend.role.create',
            'module_id' => 7,
            'status' => 1,
            'created_by' => 2,
        ]);
        \Illuminate\Support\Facades\DB::table('permissions')->insert([
            'name' => 'Role Index',
            'route' => 'backend.role.index',
            'module_id' => 7,
            'status' => 1,
            'created_by' => 2,
        ]);
        \Illuminate\Support\Facades\DB::table('permissions')->insert([
            'name' => 'Role Store',
            'route' => 'backend.role.store',
            'module_id' => 7,
            'status' => 1,
            'created_by' => 2,
        ]);
        \Illuminate\Support\Facades\DB::table('permissions')->insert([
            'name' => 'Role Edit',
            'route' => 'backend.role.edit',
            'module_id' => 7,
            'status' => 1,
            'created_by' => 2,
        ]);
        \Illuminate\Support\Facades\DB::table('permissions')->insert([
            'name' => 'Role Update',
            'route' => 'backend.role.update',
            'module_id' => 7,
            'status' => 1,
            'created_by' => 2,
        ]);
        \Illuminate\Support\Facades\DB::table('permissions')->insert([
            'name' => 'Role Delete',
            'route' => 'backend.role.destroy',
            'module_id' => 7,
            'status' => 1,
            'created_by' => 2,
        ]);
        \Illuminate\Support\Facades\DB::table('permissions')->insert([
            'name' => 'Role Show',
            'route' => 'backend.role.show',
            'module_id' => 7,
            'status' => 1,
            'created_by' => 2,
        ]);
    }
}
