<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::all()->each(function ($role) {
            User::factory()->create([
                'role_id' => $role->id,
                'email' => $role->role_name . "@gmail.com",
            ]);
        });
    }
}
