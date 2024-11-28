<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tbl_Funcionario', function (Blueprint $table) {
            $table->id('Id');
            $table->string('Nome', 100);
            $table->integer('Matricula');
            $table->string('Senha', 25)->nullable();
            $table->string('Email', 256);
            $table->integer('CPF');
            $table->string('RG', 15);
            $table->boolean('IsPcD');
            $table->float('Salario');
            $table->unsignedBigInteger('Atividade_Id');
            $table->unsignedBigInteger('Faculdade_Id');
            $table->unsignedBigInteger('Endereco_ID');
            $table->foreign('Atividade_Id')->references('Id')->on('tbl_Atividade');
            $table->foreign('Faculdade_Id')->references('Id')->on('tbl_Faculdade');
            $table->foreign('Endereco_ID')->references('ID')->on('tbl_Endereco');
            $table->unique('Id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tbl_Funcionario');
    }
};
