<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();

        DB::table('roles')->insert([
            [
                'name' => 'Super Admin',
                'slug' => 'SUPER_ADMIN',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Platform Admin',
                'slug' => 'PLATFORM_ADMIN',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'School Admin',
                'slug' => 'SCHOOL_ADMIN',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Branch Admin',
                'slug' => 'BRANCH_ADMIN',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Teacher',
                'slug' => 'TEACHER',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Accountant',
                'slug' => 'ACCOUNTANT',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Staff',
                'slug' => 'STAFF',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
