<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleHasPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Admin
        $admin_permissions = Permission::all();
        Role::findOrFail(1)->permissions()->sync($admin_permissions->pluck('id'));

        //User
        $user_permissions = $admin_permissions->filter(function($permission){

            return substr($permission->name,0,5)!= 'user_' &&
            substr($permission->name,0,5) !='role_' &&
            substr($permission->name,0,11) !='permission_' &&
            substr($permission->name,0,6) !='marca_' &&
            substr($permission->name,0,9) !='producto_'&&
            substr($permission->name,0,18) !='reclamacion_create' &&
            substr($permission->name,0,16) !='reclamacion_edit' &&
            substr($permission->name,0,19) !='reclamacion_destroy' &&
            substr($permission->name,0,12) !='marca_create' &&
            substr($permission->name,0,10) !='marca_edit' &&
            substr($permission->name,0,13) !='marca_destroy';



        });

        Role::findOrFail(2)->permissions()->sync($user_permissions);
    }
}
