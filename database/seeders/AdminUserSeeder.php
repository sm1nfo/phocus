<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{   
    public function run(): void
    {
        
        User::create([
            'name' => 'Administrador Root',
            'email' => 'admin@phocus.com', 
            'password' => Hash::make('root123'), 
            'email_verified_at' => now(),
        ]);
    }
}