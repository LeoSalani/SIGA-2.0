<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tbl_Aula', function (Blueprint $table) {
            $table->id('Id');
            $table->string('Titulo', 20);
            $table->text('Descricao')->nullable();
            $table->date('Dia');
            $table->text('Modificacoes')->nullable();
            $table->unsignedBigInteger('Diciplina_Id');
            $table->foreign('Diciplina_Id')->references('Id')->on('tbl_Disciplina');
            $table->unique('Id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tbl_Aula');
    }
};
