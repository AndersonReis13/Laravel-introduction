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
        Schema::create('itens_opcao', function (Blueprint $table) {
            $table->id();
            $table->foreignId('opcao_id')->constrained('opcoes_produto')->onDelete('cascade');
            $table->string('nome');
            $table->decimal('preco_adicional', 10, 2)->default(0);
            $table->integer('ordem')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('itens_opcao');
    }
};
