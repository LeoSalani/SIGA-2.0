<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tbl_Endereco', function (Blueprint $table) {
            $table->id('ID');
            $table->string('Logradouro', 100);
            $table->integer('Numero');
            $table->integer('CEP');
            $table->string('Complemento', 15)->nullable();
            $table->string('Bairro', 55);
            $table->unsignedBigInteger('Cidade_Id');
            $table->foreign('Cidade_Id')->references('Id')->on('tbl_cidade');
            $table->unique('ID');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tbl_Endereco');
    }
};
