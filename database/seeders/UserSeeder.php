<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Fabricio Rodriguez',
            'email' => 'fabricio-1998-xd@hotmail.com',
            'password' => bcrypt('12345678'),
        ])->assignRole('Admin');

        User::create([
            'name' => 'Admin',
            'email' => 'admin@hotmail.com',
            'password' => bcrypt('12345678'),
        ])->assignRole('Admin');

        User::create([
            'name' => 'Tatiana',
            'email' => 'tatiana23@gmail.com',
            'password' => bcrypt('12345678'),
        ])->assignRole('Repartidor');
    }
}
