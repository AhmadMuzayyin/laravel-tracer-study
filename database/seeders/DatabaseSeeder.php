<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\RoleEnum;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        \App\Models\User::create([
            'name' => 'Admin',
            'last_name' => 'SMKN 1 PROPPO',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => 'password',
            'remember_token' =>  \Illuminate\Support\Str::random(10),
            'role' => RoleEnum::Admin->value
        ]);
        \App\Models\User::factory(50)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'John',
        //     'last_name' => 'Doe',
        //     'password' => 'password',
        //     'email' => 'test@example.com',
        // ]);
    }
}
