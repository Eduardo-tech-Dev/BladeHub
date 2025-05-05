<?php

namespace Database\Factories;

use App\Models\Servico;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServicoFactory extends Factory
{
    protected $model = Servico::class;

    public function definition()
    {
        return [
            'barbearia_id' => \App\Models\Barbearia::factory(),
            'nome' => $this->faker->word(),
            'preco' => $this->faker->randomFloat(2, 10, 100),
            'duracao_minutos' => $this->faker->numberBetween(30, 90),
        ];
    }
}
