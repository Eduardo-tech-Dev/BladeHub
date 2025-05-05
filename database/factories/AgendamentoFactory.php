<?php

namespace Database\Factories;

use App\Models\Agendamento;
use Illuminate\Database\Eloquent\Factories\Factory;

class AgendamentoFactory extends Factory
{
    protected $model = Agendamento::class;

    public function definition()
    {
        return [
            'cliente_id' => \App\Models\User::factory(),
            'barbeiro_id' => \App\Models\Barbeiro::factory(),
            'servico_id' => \App\Models\Servico::factory(),
            'data_hora_inicio' => $this->faker->dateTimeThisYear(),
            'data_hora_fim' => $this->faker->dateTimeThisYear(),
            'status' => $this->faker->randomElement(['agendado', 'cancelado', 'concluido']),
            'cancelado_em' => $this->faker->optional()->dateTime(),
            'motivo_cancelamento' => $this->faker->optional()->sentence(),
            'cancelado_por' => \App\Models\User::factory()->optional(),
        ];
    }
}
