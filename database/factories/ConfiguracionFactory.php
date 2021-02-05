<?php

namespace Database\Factories;

use App\Models\Configuracion;
use Illuminate\Database\Eloquent\Factories\Factory;

class ConfiguracionFactory extends Factory
{
    protected $model = Configuracion::class;

    public function definition()
    {
        return [
            'idioma' => $this->faker->languageCode,
            'pais' => $this->faker->country,
            'estado' => $this->faker->state,
            'usuario_id' => $this->faker->numberBetween(1, 50)
        ];
    }
}
