<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Pionect\Daalder\Models\User\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = collect();
        foreach (Permission::constants() as $role) {
            foreach (['web', 'api'] as $guard) {
                $permissions->push(Permission::firstOrCreate([
                    'name' => $role,
                    'guard_name' => $guard
                ]));
            }
        }
    }
}
