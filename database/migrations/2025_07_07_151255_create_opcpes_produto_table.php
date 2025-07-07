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
        Schema::create('opcoes_produto', function (Blueprint $table) {
        $table->id();
        $table->foreignId('produto_id')->constrained()->onDelete('cascade');
        $table->string('nome');
        $table->boolean('obrigatorio')->default(false);
        $table->integer('limite')->nullable()->comment('Limite de seleção');
        $table->integer('ordem')->default(0);
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('opcpes_produto');
    }
};
