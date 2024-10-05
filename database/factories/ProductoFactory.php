<?php

namespace Database\Factories;
use App\Models\User;
use App\Models\Categoria; 
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $vendedor = User::where('id',2)->first(); 
        $categoria = Categoria::inRandomOrder()->first(); 
        return [
            'nombre' => $this->faker->word(),
            'descripcion'=>$this->faker->sentence(),
            'precio' =>$this->faker->randomFloat(2,10,100),
            'categoria_id' => $categoria ? $categoria->id : null ,
            'habilitado' => $this -> faker -> boolean(80),
            'vendedor_id' => $vendedor ? $vendedor->id : null,
            'imagen' => $this->faker->imageUrl(640,480),  
        ]; 
    }
}
