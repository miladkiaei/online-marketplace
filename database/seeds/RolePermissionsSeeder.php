<?php

use Illuminate\Database\Seeder;

class RolePermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name' => 'admin']);
//        $permission = Permission::create(['name' => 'upload csv file']);
//        $role->givePermissionTo($permission);
    }
}
