<?php

Namespace Database\Seeders;

use App\Models\Barbeiro;
use Illuminate\Database\Seeder;

class BarbeiroSeeder extends Seeder
{
    public function run()
    {
        Barbeiro::factory(15)->create(); // Cria 15 barbeiros, ajuste conforme necessário
    }
}
