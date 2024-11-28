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

        Schema::create('tbl_Aluno_Disciplina', function(Blueprint $table){

            $table->id('Id');
            $table->unsignedBigInteger('Disciplina_Id');
            $table->unsignedBigInteger('Estudante_Id');
            $table->unsignedBigInteger('Status_Id');
            $table->foreign('Disciplina_Id')->references('Id')->on('tbl_Disciplina');
            $table->foreign('Estudante_Id')->references('Id')->on('tbl_Estudante');
            $table->foreign('Status_Id')->references('Id')->on('tbl_Status');
        });
        //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::dropIfExists('tbl_Aluno_Disciplina');
        //
    }
};
