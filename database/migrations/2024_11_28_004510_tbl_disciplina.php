<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tbl_Disciplina', function (Blueprint $table) {
            $table->id('Id');
            $table->string('Nome', 45);
            $table->time('Horario')->nullable();
            $table->integer('DiaSemana')->nullable();
            $table->string('FormatoNoraFinal', 55)->nullable();
            $table->integer('Semestre');
            $table->text('Descricao')->nullable();
            $table->unsignedBigInteger('Curso_Id');
            $table->foreign('Curso_Id')->references('Id')->on('tbl_Curso');
            $table->unique('Id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tbl_Diciplina');
    }
};
