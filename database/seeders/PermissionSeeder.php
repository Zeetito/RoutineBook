<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $permissions = [
            // USER
            // ['name' => 'Activate User Account', 'slug' => 'activate_account'],
            // ['name' => 'Update User', 'slug' => 'update_user'],
            // ['name' => 'Delete User', 'slug' => 'delete_user'],
            // ['name' => 'Grant User Request', 'slug' => 'grant_request'],


            // QUESTIONAIRE
            ['name'=>'Create Questionaire', 'slug'=>"create_questionaire"],
            ['name'=>'Update Questionaire', 'slug'=>"update_questionaire"],
            ['name'=>'Delete Questionaire', 'slug'=>"delete_questionaire"],
        ];

        foreach ($permissions as $permission) {
            Permission::create($permission);
        }
    }
}
