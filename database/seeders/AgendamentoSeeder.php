<?php

namespace Database\Seeders;


use App\Models\Agendamento;
use Illuminate\Database\Seeder;

class AgendamentoSeeder extends Seeder
{
    public function run()
    {
        Agendamento::factory(30)->create(); // Cria 30 agendamentos, ajuste conforme necessário
    }
}
