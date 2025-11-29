<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Check if admin already exists
        $adminExists = User::where('email', 'admin@deboracraft.com')->exists();
        
        if (!$adminExists) {
            // Create Admin User
            User::create([
                'name' => 'Admin Debora Craft',
                'email' => 'admin@deboracraft.com',
                'password' => Hash::make('admin123'),
                'role' => 'admin',
            ]);
            $this->command->info('Admin user created successfully!');
        } else {
            $this->command->warn('Admin user already exists!');
        }

        // Check if test user already exists
        $userExists = User::where('email', 'user@deboracraft.com')->exists();
        
        if (!$userExists) {
            // Create Regular User
            User::create([
                'name' => 'User Test',
                'email' => 'user@deboracraft.com',
                'password' => Hash::make('user123'),
                'role' => 'user',
            ]);
            $this->command->info('Test user created successfully!');
        } else {
            $this->command->warn('Test user already exists!');
        }

        $this->command->info('');
        $this->command->info('=== Login Credentials ===');
        $this->command->info('Admin Email: admin@deboracraft.com');
        $this->command->info('Admin Password: admin123');
        $this->command->info('');
        $this->command->info('Test User Email: user@deboracraft.com');
        $this->command->info('Test User Password: user123');
    }
}
