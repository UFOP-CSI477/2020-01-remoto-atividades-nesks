<?php

namespace Database\Factories;

use App\Models\Score;
use App\Models\Aluno;
use Illuminate\Database\Eloquent\Factories\Factory;

class ScoreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Score::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'data' => $this->faker->date(),
            'nivel' => $this->faker->numberBetween(0,10),
            'erros' => $this->faker->numberBetween(0,10),
            'acertos' => $this->faker->numberBetween(0,10),
            'premiacao' => $this->faker->name(),
            'aluno_id' => Aluno::factory()


        ];
    }
}
