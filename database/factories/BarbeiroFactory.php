<?php

namespace Database\Factories;

use App\Models\Barbeiro;
use Illuminate\Database\Eloquent\Factories\Factory;

class BarbeiroFactory extends Factory
{
    protected $model = Barbeiro::class;

    public function definition()
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'barbearia_id' => \App\Models\Barbearia::factory(),
            'especialidade' => $this->faker->word(),
        ];
    }
}
