<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    use HasFactory;

    // Definir campos que podem ser preenchidos
    protected $fillable = ['barbearia_id', 'nome', 'preco', 'duracao_minutos'];

    // Relacionamento
    public function barbearia()
    {
        return $this->belongsTo(Barbearia::class);
    }

    public function agendamentos()
    {
        return $this->hasMany(Agendamento::class);
    }
}
