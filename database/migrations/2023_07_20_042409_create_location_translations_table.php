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
        Schema::create('location_translations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('locations_id');
            $table->enum('language', ['id', 'en']);
            $table->string('name');
            $table->string('image');
            $table->string('address');
            $table->string('menu_available');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('location_translations');
    }
};
