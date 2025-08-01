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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('tipo', ['admin', 'cliente', 'proprietario'])->default('cliente');
            $table->string('telefone')->nullable();
            $table->string('foto_perfil')->nullable();
            $table->foreignId('endereco_principal_id')->nullable()->constrained('enderecos')
                ->onDelete('set null');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();

            $table->index(['email', 'tipo']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
