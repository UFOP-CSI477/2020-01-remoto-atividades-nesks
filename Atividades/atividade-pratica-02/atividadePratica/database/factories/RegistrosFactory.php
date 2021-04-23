<?php

namespace Database\Factories;

use App\Models\Registros;
use App\Models\Equipamentos;
use App\Models\User;


use Illuminate\Database\Eloquent\Factories\Factory;

class RegistrosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Registros::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'tipo' => $this->faker->numberBetween(0,9999999),
            'descricao' => $this->faker->name(),
            'datalimite' => $this->faker->date(),
             'user_id' => User::factory(),
            'equipamento_id' => Equipamentos::factory()
        ];
    }
}
