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
        Schema::create('enderecos', function (Blueprint $table) {
            $table->id();
            $table->string('enderecavel_type');
            $table->unsignedBigInteger('enderecavel_id');
            $table->string('cep', 8);
            $table->string('logradouro');
            $table->string('numero', 20);
            $table->string('complemento')->nullable();
            $table->string('bairro');
            $table->string('cidade');
            $table->char('uf', 2);
            $table->decimal('latitude', 10, 8)->nullable();
            $table->decimal('longitude', 11, 8)->nullable();
            $table->boolean('principal')->default(false);
            $table->timestamps();

            $table->index(['enderecavel_type', 'enderecavel_id']);
            $table->index('cep');
            $table->index(['cidade', 'uf']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enderecos');
    }
};
