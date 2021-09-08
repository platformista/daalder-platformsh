<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Pionect\Daalder\Models\User\Permission;
use Pionect\Daalder\Models\User\Role;

class AssignPermissionsToRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = Permission::query()->get();

        Role::admin()->get()->each(function (Role $role) use ($permissions) {
            foreach ($permissions as $permission) {
                if (!$role->permissions()->where('name', $permission->name)->exists() && $role->guard_name == $permission->guard_name) {
                    $role->permissions()->save($permission);
                }
            }
        });

        $permissions = $permissions->filter(function ($permission) {
            return !in_array($permission->name, $this->notAllowedAsUser());
        });

        Role::user()->get()->each(function (Role $role) use ($permissions) {
            foreach ($permissions as $permission) {
                if (!$role->permissions()->where('name', $permission->name)->exists() && $role->guard_name == $permission->guard_name) {
                    $role->permissions()->save($permission);
                }
            }
        });
    }

    private function notAllowedAsUser()
    {
        return [
            Permission::VIEW_CONFIG,
            Permission::STORE_CONFIG,
            Permission::DELETE_CONFIG,
            Permission::VIEW_ROLE,
            Permission::STORE_ROLE,
            Permission::DELETE_ROLE,
            Permission::VIEW_PERMISSION,
            Permission::STORE_PERMISSION,
            Permission::DELETE_PERMISSION,
            Permission::VIEW_OAUTH_CLIENT,
            Permission::STORE_OAUTH_CLIENT,
            Permission::DELETE_OAUTH_CLIENT,
            Permission::VIEW_PASSWORD_TOKEN,
            Permission::STORE_PASSWORD_TOKEN,
            Permission::DELETE_PASSWORD_TOKEN,
            Permission::DELETE_PAYMENT,
            Permission::DELETE_STORE,
            Permission::DELETE_VAT,
            Permission::DELETE_SHIPPING,
            Permission::DELETE_PICKUP_POINT,
            Permission::DELETE_SUPPLIER,
            Permission::DELETE_USER,
            Permission::DELETE_CUSTOMER,
            Permission::DELETE_ORDER
        ];
    }
}
