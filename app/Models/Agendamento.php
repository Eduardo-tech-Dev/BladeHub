<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    use HasFactory;

    // Definir campos que podem ser preenchidos
    protected $fillable = ['cliente_id', 'barbeiro_id', 'servico_id', 'data_hora_inicio', 'data_hora_fim', 'status', 'cancelado_em', 'motivo_cancelamento', 'cancelado_por'];

    // Relacionamentos
    public function cliente()
    {
        return $this->belongsTo(User::class, 'cliente_id');
    }

    public function barbeiro()
    {
        return $this->belongsTo(Barbeiro::class);
    }

    public function servico()
    {
        return $this->belongsTo(Servico::class);
    }

    public function canceladoPor()
    {
        return $this->belongsTo(User::class, 'cancelado_por');
    }
}
