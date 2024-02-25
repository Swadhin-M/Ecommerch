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
        Schema::create('popups', function (Blueprint $table) {
            $table->id();
            $table->string('pop_image')->nullable();
            $table->string('mini_pop_image')->nullable();

            $table->string('title')->nullable();
            $table->string('name')->nullable();
            $table->string('mini_pop_title')->nullable();
            $table->string('mini_pop_name')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('popups');
    }
};
