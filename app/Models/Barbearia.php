<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barbearia extends Model
{
    use HasFactory;

    // Definir campos que podem ser preenchidos
    protected $fillable = ['nome', 'endereco', 'telefone', 'email'];

    // Relacionamentos
    public function barbeiros()
    {
        return $this->hasMany(Barbeiro::class);
    }

    public function servicos()
    {
        return $this->hasMany(Servico::class);
    }
}
