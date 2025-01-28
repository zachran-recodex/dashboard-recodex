<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Create permissions
        $permissions = [
            // User management permissions
            'view users',
            'create users',
            'edit users',
            'delete users',

            // Role management permissions
            'view roles',
            'create roles',
            'edit roles',
            'delete roles',

            // Other common permissions
            'view dashboard',
            'manage settings',
            'view reports',
            'export data',
            'view audit logs',
            'manage backups',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Create roles and assign permissions

        // Super Admin - Has all permissions
        $superAdmin = Role::create(['name' => 'super-admin']);
        $superAdmin->givePermissionTo(Permission::all());

        // Admin - Has most permissions except sensitive ones
        $admin = Role::create(['name' => 'admin']);
        $admin->givePermissionTo([
            'view users', 'create users', 'edit users',
            'view roles',
            'view dashboard',
            'manage settings',
            'view reports',
            'export data',
            'view audit logs'
        ]);

        // Manager - Has limited management permissions
        $manager = Role::create(['name' => 'manager']);
        $manager->givePermissionTo([
            'view users',
            'view dashboard',
            'view reports',
            'export data',
            'view audit logs'
        ]);

        // User - Basic permissions
        $user = Role::create(['name' => 'user']);
        $user->givePermissionTo([
            'view dashboard',
            'view reports'
        ]);

        // Create default super admin user
        $superAdminUser = User::create([
            'name' => 'Super Admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('password')
        ]);
        $superAdminUser->assignRole('super-admin');

        // Create a default admin user
        $adminUser = User::create([
            'name' => 'Admin User',
            'email' => 'admin2@mail.com',
            'password' => Hash::make('password')
        ]);
        $adminUser->assignRole('admin');
    }
}
