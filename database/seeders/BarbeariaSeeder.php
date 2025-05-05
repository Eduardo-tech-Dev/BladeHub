<?php

namespace Database\Seeders;

use App\Models\Barbearia;
use Illuminate\Database\Seeder;

class BarbeariaSeeder extends Seeder
{
    public function run()
    {
        Barbearia::factory(5)->create(); // Cria 5 barbearias, ajuste conforme necessário
    }
}

