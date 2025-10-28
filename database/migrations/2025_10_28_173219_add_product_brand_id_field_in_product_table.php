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
        Schema::table('product', function (Blueprint $table) {
            // Primero: agregar la nueva columna
            $table->unsignedInteger('product_brand_id')->after('product_manufacturer_id');
            $table->foreign('product_brand_id')->references('id')->on('product_brand');
        });

        Schema::table('product', function (Blueprint $table) {
            // Segundo: modificar la posición de la columna existente
            $table->unsignedInteger('product_category_id')->after('product_brand_id')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('product', function (Blueprint $table) {
            //
        });
    }
};
