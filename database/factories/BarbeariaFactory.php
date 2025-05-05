<?php

namespace Database\Factories;

use App\Models\Barbearia;
use Illuminate\Database\Eloquent\Factories\Factory;

class BarbeariaFactory extends Factory
{
    protected $model = Barbearia::class;

    public function definition()
    {
        return [
            'nome' => $this->faker->company(),
            'endereco' => $this->faker->address(),
            'telefone' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
        ];
    }
}
