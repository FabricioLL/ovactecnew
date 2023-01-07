<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::create([
            'name' => 'Nolberto Solano',
            'dni' => '65453432',
            'ruc' => '34563445675',
            'address' => 'Victor larco 564, Trujillo',
            'phone' => '956456734',
            'email' => 'santicarsola@gmail.com',
        ]);

        Client::create([
            'name' => 'Brayan Moya',
            'dni' => '76534452',
            'ruc' => '34567823542',
            'address' => 'Cesas vallejo 123, Rinconada',
            'phone' => '908675645',
            'email' => 'moya56@gmail.com',
        ]);
    }
}
