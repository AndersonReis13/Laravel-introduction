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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('pizzaria_id')->constrained()->onDelete('cascade');
            $table->foreignId('endereco_id')->constrained('enderecos')->onDelete('cascade');
            $table->string('codigo')->unique();
            $table->enum('status', ['recebido', 'preparando', 'saiu_entrega', 'entregue', 'cancelado'])->default('recebido');
            $table->decimal('subtotal', 10, 2);
            $table->decimal('taxa_entrega', 10, 2);
            $table->decimal('desconto', 10, 2)->default(0);
            $table->decimal('total', 10, 2);
            $table->string('forma_pagamento');
            $table->text('observacao')->nullable();
            $table->timestamps();
            $table->timestamp('entregue_em')->nullable();

            $table->index(['usuario_id', 'status']);
            $table->index(['pizzaria_id', 'created_at']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
