<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Barbearia;
use App\Models\Barbeiro;
use App\Models\Servico;
use App\Models\Agendamento;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Cria 10 clientes
        $clientes = User::factory()->count(10)->create();

        // Cria 5 barbearias
        $barbearias = Barbearia::factory()->count(5)->create();

        foreach ($barbearias as $barbearia) {
            // Cria 3 barbeiros por barbearia
            $barbeiros = User::factory()->count(3)->create();

            foreach ($barbeiros as $user) {
                Barbeiro::factory()->create([
                    'user_id' => $user->id,
                    'barbearia_id' => $barbearia->id,
                ]);
            }

            // Cria 4 serviços por barbearia
            Servico::factory()->count(4)->create([
                'barbearia_id' => $barbearia->id,
            ]);
        }

        // Cria 20 agendamentos entre clientes, barbeiros e serviços aleatórios
        for ($i = 0; $i < 20; $i++) {
            $cliente = $clientes->random();
            $barbeiro = Barbeiro::inRandomOrder()->first();
            $servico = Servico::where('barbearia_id', $barbeiro->barbearia_id)->inRandomOrder()->first();

            $inicio = now()->addDays(rand(0, 15))->setTime(rand(8, 18), [0, 15, 30, 45][rand(0, 3)]);
            $fim = (clone $inicio)->addMinutes($servico->duracao_minutos);

            Agendamento::create([
                'cliente_id' => $cliente->id,
                'barbeiro_id' => $barbeiro->id,
                'servico_id' => $servico->id,
                'data_hora_inicio' => $inicio,
                'data_hora_fim' => $fim,
                'status' => 'agendado',
            ]);
        }
    }
}
