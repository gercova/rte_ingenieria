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
        Schema::create('sale', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('receipt_type_id');
            $table->foreign('receipt_type_id')->references('id')->on('receipt_type');
            $table->integer('correlative');
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('client');
            $table->decimal('subtotal', 8, 2);
            $table->decimal('tax', 8, 2)->default(0);
            $table->decimal('discount', 8,2)->default(0);
            $table->decimal('total', 8,2);
            $table->enum('sale_status', ['pendiente','pagado','cancelado','reembolsado'])->default('pendiente');
            $table->unsignedInteger('payment_method_id');
            $table->foreign('payment_method_id')->references('id')->on('payment_method');
            $table->enum('payment_status', ['pendiente','completado','fallido','reembolsado'])->default('pendiente');
            $table->string('shipping_address');
            $table->decimal('shipping_cost', 8,2)->default(0);
            $table->string('tracking_number', 100);
            $table->enum('shipping_status', ['pendiente','enviado','entregado'])->default('pendiente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sale');
    }
};
