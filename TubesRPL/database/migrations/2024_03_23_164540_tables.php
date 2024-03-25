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
        //
        Schema::create('Table_Info', function (Blueprint $table) {
            $table->id('TableID')->primary();
            $table->integer('Capacity');
            $table->enum('TableArea',['Non Smoking','Smoking']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('Table_Info');
    }
};
