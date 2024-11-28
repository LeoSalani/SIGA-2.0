<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tbl_Faculdade', function (Blueprint $table) {
            $table->id('Id');
            $table->string('Nome', 50);
            $table->integer('NumeroReferencia');
            $table->unique('Id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tbl_Faculdade');
    }
};
