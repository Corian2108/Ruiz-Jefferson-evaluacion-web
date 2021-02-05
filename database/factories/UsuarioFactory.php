<?php

namespace Database\Factories;

use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UsuarioFactory extends Factory
{
    protected $model = Usuario::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->firstName,
            'nombre_completo' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'telefono' => $this->faker->unique()->phoneNumber,
            'edad' => rand(15, 60),
            'fecha_nacimiento' => $this->faker->date('Y-m-d', 'now'),
            'configuracion_id' => $this->faker->numberBetween(1, 50)
        ];
    }
}
