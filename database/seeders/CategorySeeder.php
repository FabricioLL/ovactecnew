<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Procesador',
            'description' => 'Cerebro del sistema, justamente procesa todo lo que ocurre en la PC y ejecuta todas las acciones que existen.',
        ]);

        Category::create([
            'name' => 'Memoria y almacenamiento',
            'description' => 'Disco duro, SSD',
        ]);

        Category::create([
            'name' => 'Mouse',
            'description' => 'Accesorio de computadora',
        ]);

        Category::create([
            'name' => 'Audifonos',
            'description' => 'Aparato electrónico que se usa dentro o detrás de la oreja. Amplifica ciertos sonidos',
        ]);
    }
}
