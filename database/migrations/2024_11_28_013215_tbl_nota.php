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

        Schema::create('tbl_Nota', function(Blueprint $table){

            $table->id('Id');
            $table->string('Formato', 10);
            $table->text('Descricao');
            $table->unsignedBigInteger(column: 'Tipo_Avaliacao_Id');
            $table->unsignedBigInteger(column: 'Disciplina_Id');
            $table->foreign('Tipo_Avaliacao_Id')->references('Id')->on('tbl_Tipo_Avaliacao');
            $table->foreign('Disciplina_Id')->references('Id')->on('tbl_Disciplina');
        });
        //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::dropIfExists('tbl_Nota');
        //
    }
};
