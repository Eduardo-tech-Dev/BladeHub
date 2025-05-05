<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    // Definir campos que podem ser preenchidos
    protected $fillable = ['name', 'email', 'password'];

    // Relacionamentos
    public function barbeiro()
    {
        return $this->hasOne(Barbeiro::class);
    }

    public function agendamentos()
    {
        return $this->hasMany(Agendamento::class, 'cliente_id');
    }

    public function agendamentosCancelados()
    {
        return $this->hasMany(Agendamento::class, 'cancelado_por');
    }
}
