<?php

namespace Database\Factories;

use App\Models\Aluno;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlunoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Aluno::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome'=>$this->faker->name(),
            'nivel'=>$this->faker->numberBetween(0,10),
            'personagem'=>$this->faker->name(),
            'imgPersonagem'=>$this->faker->imageUrl(300,300,'character')
        ];
    }
}
