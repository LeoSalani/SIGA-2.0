<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tbl_Sala_Agendamento', function (Blueprint $table) {
            $table->id('Id');
            $table->dateTime('Agendamento');
            $table->text('Descricao')->nullable();
            $table->unsignedBigInteger('Diciplina_Id');
            $table->unsignedBigInteger('Sala_Id');
            $table->foreign('Diciplina_Id')->references('Id')->on('tbl_Disciplina');
            $table->foreign('Sala_Id')->references('Id')->on('tbl_Sala');
            $table->unique('Id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tbl_Sala_Agendamento');
    }
};
