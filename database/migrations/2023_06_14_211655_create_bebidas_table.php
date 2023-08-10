<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bebidas', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");
            $table->double("presentacion", 8, 2);
            $table->string("sabor");
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bebidas');
    }
};
