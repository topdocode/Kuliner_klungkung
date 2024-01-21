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
        Schema::create('histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('menus_id');
            $table->text('title_1')->nullable();
            $table->text('title_2')->nullable();
            $table->text('title_3')->nullable();
            $table->text('title_4')->nullable();
            $table->text('title_5')->nullable();
            $table->text('title_6')->nullable();
            $table->text('step_1')->nullable();
            $table->text('step_2')->nullable();
            $table->text('step_3')->nullable();
            $table->text('step_4')->nullable();
            $table->text('step_5')->nullable();
            $table->text('step_6')->nullable();
            $table->text('history')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('histories');
    }
};
