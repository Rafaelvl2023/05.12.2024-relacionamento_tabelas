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
        Schema::create('user_group', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id'); // Chave estrangeira para 'users'
            $table->unsignedBigInteger('group_id'); // Chave estrangeira para 'groups'
            $table->timestamps(); // Colunas 'created_at' e 'updated_at'

            $table->primary(['user_id', 'group_id']); // Chave primária composta
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('group_id')->references('id')->on('groups')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_group');
    }
};
