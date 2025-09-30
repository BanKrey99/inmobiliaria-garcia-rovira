<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'feliortz361@gmail.com'], // evita duplicados si ya existe
            [
                'name' => 'Mil yang',
                'password' => Hash::make('password'), 
            ]
        );
    }
}