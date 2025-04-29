<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    public function run()
    {
        // Define role IDs
        $adminId = 501;
        $userId = 502;

        // Create roles
        $roles = [
            ['id' => $adminId, 'name' => 'ROLE_ADMIN'],
            ['id' => $userId, 'name' => 'ROLE_USER'],
        ];

        // Insert into database
        foreach ($roles as $role) {
            Role::updateOrCreate(['id' => $role['id']], $role);
        }

        // Output for confirmation
        echo "Roles saved successfully.\n";
    }
}
