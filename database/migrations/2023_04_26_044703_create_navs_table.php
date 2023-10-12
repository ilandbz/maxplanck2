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
        Schema::create('navs', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('url')->nullable();
            $table->string('ruta')->nullable();
            $table->string('slug')->nullable();
            $table->string('icono')->nullable();
            $table->foreignId('padre_id')->nullable()->constrained('navs')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedInteger('orden');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('navs');
    }
};
