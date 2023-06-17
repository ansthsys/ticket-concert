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

        \App\Models\Concert::insert([
            [
                'name' => 'Impacnation 2023',
                'scheduled_date' => date('Y-m-d', strtotime('26-08-2023')),
            ],
            [
                'name' => 'Blackpink 2024',
                'scheduled_date' => date('Y-m-d', strtotime('26-08-2024')),
            ],
            [
                'name' => 'Berdendang Bergoyang Festival',
                'scheduled_date' => date('Y-m-d', strtotime('26-08-2024')),
            ],
            [
                'name' => 'Java Jazz Festival 2024',
                'scheduled_date' => date('Y-m-d', strtotime('26-08-2024')),
            ],
            [
                'name' => 'Head in the Clouds Indonesia',
                'scheduled_date' => date('Y-m-d', strtotime('26-08-2024')),
            ],
            [
                'name' => 'The 10th Music Gallery 2024',
                'scheduled_date' => date('Y-m-d', strtotime('26-08-2024')),
            ],
            [
                'name' => 'Hammersonic Festival 2024',
                'scheduled_date' => date('Y-m-d', strtotime('26-08-2024')),
            ]
        ]);

        \App\Models\Ticket::create([
            'user_id' => 1,
            'concert_id' => 1,
            'code' => uniqid('TIX' . rand(1000, 9999) . '-', true)
        ]);
    }
}
