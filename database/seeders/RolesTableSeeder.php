<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            [
                'id'         => 1,
                'title'      => 'Admin',
                'created_at' => '2020-10-08 07:11:07',
                'updated_at' => '2020-10-08 07:11:07',
            ],
            [
                'id'         => 2,
                'title'      => 'User',
                'created_at' => '2020-10-08 07:11:07',
                'updated_at' => '2020-10-08 07:11:07',
            ],
        ];

        Role::insert($roles);
    }
}
