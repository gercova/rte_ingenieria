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
        Schema::create('client', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('type_document_id');
            $table->foreign('type_document_id')->references('id')->on('type_document');
            $table->string('dni', 11)->unique();
            $table->string('fullname', 150);
            $table->date('birth_date');
            $table->string('telephone', 20);
            $table->string('location', 100);
            $table->string('address', 150);
            $table->string('references', 100);
            $table->char('is_active', 1)->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client');
    }
};
