<?php

namespace Database\Seeders;

use App\Models\Provider;
use Illuminate\Database\Seeder;

class ProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Provider::create([
            'name' => 'Viviana S.A.C.',
            'email' => 'vivianachavez069@gmail.com',
            'ruc_number' => '34564534231',
            'address' => 'Abtao 60, Estación central',
            'phone' => '903020812',
        ]);

        Provider::create([
            'name' => 'Lupe Mendoza S.A.C.',
            'email' => 'lupe_1997@hotmail.com',
            'ruc_number' => '98763456231',
            'address' => 'Acceso Sur, Puente alto',
            'phone' => '903020800',
        ]);
    }
}
