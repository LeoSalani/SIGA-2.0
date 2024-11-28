<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tbl_Curso', function (Blueprint $table) {
            $table->id('Id');
            $table->string('Nome', 60);
            $table->integer('QtdSemestres');
            $table->unsignedBigInteger('Coordenador_Id');
            $table->unsignedBigInteger('Modalidade_Id');
            $table->foreign('Coordenador_Id')->references('Id')->on('tbl_Coordenador');
            $table->foreign('Modalidade_Id')->references('Id')->on('Modalidade');
            $table->unique('Id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tbl_Curso');
    }
};
