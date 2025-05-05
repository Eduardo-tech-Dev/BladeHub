<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('agendamentos', function (Blueprint $table) {
            $table->id();

            $table->foreignId('cliente_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('barbeiro_id')->constrained('barbeiros')->onDelete('cascade');
            $table->foreignId('servico_id')->constrained('servicos')->onDelete('cascade');

            $table->dateTime('data_hora_inicio');
            $table->dateTime('data_hora_fim');

            $table->enum('status', ['agendado', 'cancelado', 'concluido'])->default('agendado');
            $table->dateTime('cancelado_em')->nullable();
            $table->text('motivo_cancelamento')->nullable();
            $table->foreignId('cancelado_por')->nullable()->constrained('users')->nullOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agendamentos');
    }
};
