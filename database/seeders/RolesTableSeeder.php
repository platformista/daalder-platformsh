<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Pionect\Daalder\Models\User\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @param \Pionect\Daalder\Models\User\Role $role
     * @return void
     */
    public function run(Role $role)
    {
        foreach ($role->constants() as $name) {
            foreach (['web', 'api'] as $guard) {
                $role->query()->firstOrCreate([
                    'name' => $name,
                    'guard_name' => $guard
                ]);
            }
        }
    }
}
