<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions =

        [
            //reclamacion
            'reclamacion_index',
            'reclamacion_create',
            'reclamacion_edit',
            'reclamacion_show',
            'reclamacion_destroy',

             //marcas
             'marca_index',
             'marca_create',
             'marca_edit',
             'marca_destroy',


            //productos
            'producto_index',
            'producto_create',
            'producto_edit',
            'producto_destroy',


            //user
            'user_index',
            'user_create',
            'user_edit',
            'user_destroy',


            //permisos
            'permission_index',
            'permission_create',
            'permission_edit',
            'permission_destroy',

            //roles
            'role_index',
            'role_create',
            'role_edit',
            'role_destroy',

        ];

        foreach ($permissions as $permission) {
            Permission::create([
                'name' => $permission,
            ]);
        }
    }
}
