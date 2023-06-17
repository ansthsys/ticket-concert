<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::create([
            'name' => 'Administrator',
            'email' => 'admin@ticket.com',
            'role' => 'admin',
            'password' => Hash::make('administrator'),
        ]);

        \App\Models\Concert::create([
            'name' => 'Impacnation 2023',
            'scheduled_date' => date('Y-m-d', strtotime('26-08-2023')),
        ]);
    }
}
