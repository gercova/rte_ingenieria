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
            $table->unsignedInteger('product_category_id');
            $table->foreign('product_category_id')->references('id')->on('product_category');
            $table->unsignedInteger('product_type_id');
            $table->foreign('product_type_id')->references('id')->on('product_type');
            $table->unsignedInteger('product_model_id');
            $table->foreign('product_model_id')->references('id')->on('product_model');
            $table->unsignedBigInteger('unit_measure_id');
            $table->string('code', 4);
            $table->unsignedInteger('product_color_id');
            $table->foreign('product_color_id')->references('id')->on('product_color');
            $table->string('description')->unique();
            $table->string('detail');
            $table->string('characteristics');
            $table->string('specifications');
            $table->string('image');
            $table->integer('stock');
            $table->decimal('price_min', 8, 2);
            $table->decimal('price_max', 8, 2);
            $table->decimal('discount');
            $table->boolean('offer')->default(false);
            $table->string('batch');
            $table->date('expiration_date');
            $table->char('is_active', 1)->default('1');
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
