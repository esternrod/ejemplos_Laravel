<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { // Definir un array de categorías
        $categorias = [
        ['nombre' => 'Zapatilla'],
        ['nombre' => 'Remeras'],
        ];
        // Insertar categorías utilizando un bucle
    foreach ($categorias as $categoria)
    {
        Categoria::create($categoria);
    }
    }
}
