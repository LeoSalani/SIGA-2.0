<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Atestado', function (Blueprint $table) {
            $table->id('Id');
            $table->integer('Protocolo');
            $table->integer('Qtde');
            $table->date('DataPedido');
            $table->date('DataProcessamento')->nullable();
            $table->unsignedBigInteger('TipoAtestado_Id');
            $table->unsignedBigInteger('Estudante_Id');
            $table->foreign('TipoAtestado_Id')->references('Id')->on('tbl_tipoatestado')->onDelete('cascade');
            $table->foreign('Estudante_Id')->references('Id')->on('tbl_Estudante')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Atestado');
    }
};
