<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::create([
            'name' => 'Jean Dupont',
            'email' => 'jean@example.com',
            'city' => 'Paris'
        ]);

        Client::create([
            'name' => 'Marie Martin',
            'email' => 'marie@example.com',
            'city' => 'Lyon'
        ]);
    }
}
