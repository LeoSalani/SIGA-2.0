<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tbl_Secretaria', function (Blueprint $table) {
            $table->id('Id');
            $table->integer('Autorizacao');
            $table->unsignedBigInteger('Funcionario_Id');
            $table->foreign('Funcionario_Id')->references('Id')->on('tbl_Funcionario');
            $table->unique('Id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tbl_Secretaria');
    }
};
