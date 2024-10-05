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
        $users = [ // Datos de usuarios a crear
            [ 'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345')
            ],
            [ 'name' => 'vendedor',
            'email' => 'vendedor@gmail.com',
            'password' => Hash::make('12345')
            ],
            [ 'name' => 'cliente',
            'email' => 'cliente@gmail.com',
            'password' => Hash::make('12345')
            ],
            ];
            foreach ($users as $user) { // Crear usuarios usando el factory
            User::factory()->create($user);
            }
            
    }
}
