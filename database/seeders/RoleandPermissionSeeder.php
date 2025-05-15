<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleandPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'superadmin']);
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'user']);

        // Permission opsional
        Permission::create(['name' => 'view']);
        Permission::create(['name' => 'edit']);
        Permission::create(['name' => 'delete']);

        // Assign permission ke role
        $role = Role::findByName('superadmin');
        $role->givePermissionTo(['view', 'edit', 'delete']);

        $role = Role::findByName('admin');
        $role->givePermissionTo(['view', 'edit', 'delete']);

        $role = Role::findByName('user');
        $role->givePermissionTo(['view']);

        //Assign to user
        $user = User::find(1);
        $user->assignRole('superadmin');
    }
}
