<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_admin = Role::create(['name' => 'admin']);
        $role_editor = Role::create(['name' => 'editor']);
        $role_auraEditor = Role::create(['name' => 'auraEditor']);

        $permission_create_role = Permission::create(['name' => 'create roles']);
        $permission_read_role = Permission::create(['name' => 'read roles']);
        $permission_update_role = Permission::create(['name' => 'update roles']);
        $permission_delete_role = Permission::create(['name' => 'delete roles']);

        $permission_create_category = Permission::create(['name' => 'create categories']);
        $permission_read_category = Permission::create(['name' => 'read categories']);
        $permission_update_category = Permission::create(['name' => 'update categories']);
        $permission_delete_category = Permission::create(['name' => 'delete categories']);

        $permission_create_subcategory = Permission::create(['name' => 'create subcategories']);
        $permission_read_subcategory = Permission::create(['name' => 'read subcategories']);
        $permission_update_subcategory = Permission::create(['name' => 'update subcategories']);
        $permission_delete_subcategory = Permission::create(['name' => 'delete subcategories']);

        $permission_create_aura = Permission::create(['name' => 'create auras']);
        $permission_read_aura = Permission::create(['name' => 'read auras']);
        $permission_update_aura = Permission::create(['name' => 'update auras']);
        $permission_delete_aura = Permission::create(['name' => 'delete auras']);

        $permissions_admin = [$permission_create_role, $permission_read_role, $permission_update_role, $permission_delete_role,  $permission_create_category, $permission_read_category, $permission_update_category, $permission_delete_category, $permission_create_subcategory, $permission_read_subcategory, $permission_update_subcategory, $permission_delete_subcategory, $permission_create_aura, $permission_read_aura, $permission_update_aura, $permission_delete_aura];

        $permissions_editor = [$permission_create_category, $permission_read_category, $permission_update_category, $permission_delete_category, $permission_create_subcategory, $permission_read_subcategory, $permission_update_subcategory, $permission_delete_subcategory, $permission_create_aura, $permission_read_aura, $permission_update_aura, $permission_delete_aura];

        $permissions_auraEditor = [$permission_create_aura, $permission_read_aura, $permission_delete_aura, $permission_update_aura];

        $role_admin->syncPermissions($permissions_admin);
        $role_editor->syncPermissions($permissions_editor);
        $role_auraEditor->syncPermissions($permissions_auraEditor);
    }
}
