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
        Schema::create('specification', function (Blueprint $table) {
            $table->id();
            $table->string('Especificacion');
            $table->string('RAM');
            $table->string('CPU');
            $table->string('Disco Duro');
            $table->string('Tarjeta Grafica');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('specification');
    }
};
