<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tbl_Sala', function (Blueprint $table) {
            $table->id('Id');
            $table->integer('Numero');
            $table->integer('Bloco');
            $table->unique('Id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tbl_Sala');
    }
};
