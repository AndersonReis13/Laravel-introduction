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
        Schema::create('produtos', function (Blueprint $table) {
        $table->id();
        $table->foreignId('pizzaria_id')->constrained()->onDelete('cascade');
        $table->foreignId('categoria_id')->nullable()->constrained()->onDelete('set null');
        $table->string('nome');
        $table->text('descricao')->nullable();
        $table->decimal('preco', 10, 2);
        $table->string('imagem_url')->nullable();
        $table->boolean('disponivel')->default(true);
        $table->boolean('destaque')->default(false);
        $table->timestamps();

        $table->index(['pizzaria_id', 'disponivel']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
