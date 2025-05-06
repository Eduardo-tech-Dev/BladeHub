<?php

namespace App\Http\Controllers;

use App\Models\Barbearia;
use Illuminate\Http\Request;

class BarbeariaController extends Controller
{
    public function index(Request $request)
    {
        // Verifica se há um termo de pesquisa
        $query = Barbearia::query();

        if ($request->has('search') && $request->search) {
            // Filtra as barbearias pelo nome
            $query->where('nome', 'like', '%' . $request->search . '%');
        }

        // Recupera as barbearias (com a busca aplicada, se houver)
        $barbearias = $query->get();

        // Retorna a view com as barbearias
        return view('pages.index', compact('barbearias'));
    }
}
