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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('type_id');
            $table->unsignedBigInteger('unit_measure_id');
            $table->string('code', 4);
            $table->string('description')->unique();
            $table->string('detail');
            $table->string('image');
            $table->integer('stock');
            $table->decimal('price_min', 8, 2);
            $table->decimal('price_max', 8, 2);
            $table->string('batch');
            $table->date('expiration_date');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
