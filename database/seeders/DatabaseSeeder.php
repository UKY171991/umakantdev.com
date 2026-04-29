<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::updateOrCreate(
            ['email' => 'test@example.com'],
            [
                'name' => 'Test User',
                'password' => bcrypt('password'),
            ]
        );

        User::updateOrCreate(
            ['email' => 'admin@umakantdev.com'],
            [
                'name' => 'Administrator',
                'password' => bcrypt('Admin@2026'),
                'role' => 'admin',
                'status' => 'active',
            ]
        );

        $this->call([
            ServiceCategorySeeder::class,
            ServiceSeeder::class,
            PostSeeder::class,
        ]);
    }
}
