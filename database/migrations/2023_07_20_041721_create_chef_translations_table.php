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
        Schema::create('chef_translations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('chefs_id');
            $table->enum('language', ['id', 'en']);
            $table->foreignId('locations_id')->nullable();
            $table->string('name');
            $table->string('image');
            $table->string('cooked_menu');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chef_translations');
    }
};
