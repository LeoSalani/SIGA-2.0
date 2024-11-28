<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tbl_tipoatestado', function (Blueprint $table) {
            $table->id('Id');
            $table->string('Titulo', 40);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tbl_tipoatestado');
    }
};
