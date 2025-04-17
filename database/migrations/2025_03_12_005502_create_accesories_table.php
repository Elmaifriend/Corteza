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
        Schema::create('accesories', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");
            $table->string("name");
            $table->string("price");
            $table->enum("categoria",["Muebles", "Cocina", "Accesorios", "Electrodomesticos", "Servicios", "Seguridad"]);
            $table->enum("category", ["Furniture", "Kitchen", "Accessories", "Appliances", "Services", "Security"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accesories');
    }
};
