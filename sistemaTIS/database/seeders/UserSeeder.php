<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminUser=User::create([
            'name' => 'admin',
            'apellidos' => 'TIS',
            'cod_sis' => '201802584',
            'num_telefono' => '67524813',
            'tipo' => '1',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
        $comunUser=User::create([
            'name' => 'Comun',
            'apellidos' => 'User',
            'cod_sis' => '201802585',
            'num_telefono' => '67524814',
            'tipo' => '2',
            'email' => 'comunuser@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
