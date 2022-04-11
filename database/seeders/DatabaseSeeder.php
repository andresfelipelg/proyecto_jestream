<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionServiceProvider;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         //\App\Models\User::factory(10)->create();
        \App\Models\Cliente::factory(210)->create();
        \App\Models\Comercial::factory(20)->create();
        \App\Models\User::create([
            'name' => 'andres lopez',
            'email' => 'test@test.com',
            'password' => bcrypt('123456789'),
        ]);

        $this->call([
            PermissionSeeder::class,
            RoleSeeder::class,
            RoleHasPermissionSeeder::class,


        ]);
    }
}
