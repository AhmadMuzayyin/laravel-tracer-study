<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\RoleEnum;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

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
        $this->call(QuestionSeeder::class);
        \App\Models\User::factory(50)->create();
    }
}
