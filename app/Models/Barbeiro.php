<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barbeiro extends Model
{
    use HasFactory;

    // Definir campos que podem ser preenchidos
    protected $fillable = ['user_id', 'barbearia_id', 'especialidade'];

    // Relacionamentos
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function barbearia()
    {
        return $this->belongsTo(Barbearia::class);
    }

    public function agendamentos()
    {
        return $this->hasMany(Agendamento::class);
    }
}
