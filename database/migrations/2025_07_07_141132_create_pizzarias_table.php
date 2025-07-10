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
        Schema::create('pizzarias', function (Blueprint $table) {
        $table->id();
        $table->foreignId('usuario_id')->constrained('users')->onDelete('cascade');
        $table->string('nome_fantasia');
        $table->string('razao_social')->nullable();
        $table->text('descricao')->nullable();
        $table->string('logo_url')->nullable();
        $table->string('capa_url')->nullable();
        $table->string('telefone', 20);
        $table->string('cnpj', 18)->nullable()->unique();
        $table->time('horario_abertura');
        $table->time('horario_fechamento');
        $table->foreignId('endereco_principal_id')->nullable()->constrained('enderecos')
            ->onDelete('set null');
        $table->decimal('taxa_entrega', 10, 2)->default(0);
        $table->integer('tempo_entrega_minimo')->nullable();
        $table->integer('tempo_entrega_maximo')->nullable();
        $table->decimal('pedido_minimo', 10, 2)->default(0);
        $table->boolean('aceita_cartao')->default(false);
        $table->boolean('aceita_dinheiro')->default(true);
        $table->boolean('ativo')->default(true);
        $table->decimal('nota_media', 3, 2)->nullable();
        $table->timestamps();
        $table->softDeletes();

        $table->index(['nome_fantasia', 'ativo']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pizzarias');
    }
};
