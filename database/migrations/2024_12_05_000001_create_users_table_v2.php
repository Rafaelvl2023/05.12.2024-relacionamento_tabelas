<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTableV2 extends Migration
{
    /**
     * Execute as migrações.
     */
    public function up(): void
    {
        Schema::create('users2', function (Blueprint $table) {
            $table->id(); // Chave primária
            $table->string('name'); // Nome do usuário
            $table->string('email')->unique(); // Email único
            $table->string('password'); // Senha do usuário
            $table->timestamps(); // Colunas 'created_at' e 'updated_at'
        });
    }

    /**
     * Reverta as migrações.
     */
    public function down(): void
    {
        Schema::dropIfExists('users2');
    }
}
