<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tbl_Estudante', function (Blueprint $table) {
            $table->id('Id');
            $table->integer('Registro_Academico');
            $table->string('Nome', 100);
            $table->integer('Idade');
            $table->string('Senha', 100)->nullable();
            $table->string('Email', 256);
            $table->string('RG', 12);
            $table->integer('CPF');
            $table->boolean('IsPcd');
            $table->float('PR')->nullable();
            $table->float('PP')->nullable();
            $table->float('PP_Intercambio')->nullable();
            $table->unsignedBigInteger('Endereco_ID');
            $table->foreign('Endereco_ID')->references('ID')->on('tbl_Endereco');
            $table->unsignedBigInteger('Curso_Id');
            $table->foreign('Curso_Id')->references('ID')->on('tbl_Curso');
            $table->unique('Id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tbl_Estudante');
    }
};
