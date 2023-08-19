<?php

namespace Database\Factories;
use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;

class CursoFactory extends Factory
{
    protected $model = Curso::class;
     //@return array
     
    
    public function definition()
    {
        return [
            'name'=>$this->faker->sentence(),
            'descripcion'=>$this->faker->paragraph(),
            'categoria'=>$this->faker->randomElement(['desarrollo web', 'diseño web ']),

        ];
    }
}
