<?php

namespace Database\Seeders;


use App\Models\Servico;
use Illuminate\Database\Seeder;

class ServicoSeeder extends Seeder
{
    public function run()
    {
        Servico::factory(20)->create(); // Cria 20 serviços, ajuste conforme necessário
    }
}
