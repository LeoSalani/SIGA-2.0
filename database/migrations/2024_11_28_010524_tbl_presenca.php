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

        Schema::create('tbl_presenca', function(Blueprint $table){
            $table->id('Id');
            $table->tinyInteger('Presenca');
            $table->string('Date', 45);
            $table->unsignedBigInteger('Disciplina_Id');
            $table->unsignedBigInteger('Estudante_Id');
            $table->foreign('Disciplina_Id')->references('Id')->on('tbl_Disciplina');
            $table->foreign('Estudante_Id')->references('Id')->on('tbl_Estudante');
        });
        //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::dropIfExists('tbl_presenca');
        //
    }
};
