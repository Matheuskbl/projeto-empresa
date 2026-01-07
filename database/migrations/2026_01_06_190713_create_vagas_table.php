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
        Schema::create('vagas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('descricao');
            $table->string('tipo');
            $table->decimal('salario', 10, 2)->nullable();// DECIMAL, pode ser nulo
            $table->boolean('ativa')->default(true);
            $table->timestamps(); // Cria created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vagas');
    }
};
