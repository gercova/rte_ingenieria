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
        Schema::create('enterprise', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ruc', 11)->unique();
            $table->string('trade_name', 100);
            $table->string('business_name', 100);
            $table->string('proverb', 100);
            $table->string('email', 50);
            $table->string('address', 100);
            $table->string('telephone', 20);
            $table->string('description');
            $table->string('legal_representative', 100);
            $table->string('logo', 50);
            $table->string('icon', 50);
            $table->string('logo_min', 50);
            $table->string('banner', 50);
            $table->date('creation_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enterprise');
    }
};
