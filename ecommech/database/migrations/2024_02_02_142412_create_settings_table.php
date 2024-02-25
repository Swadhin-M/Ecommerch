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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linknd')->nullable();
            $table->string('head_image')->nullable();
            $table->string('heading')->nullable();
            $table->string('name')->nullable();
            $table->string('price')->nullable();
            $table->string('testmonial_image')->nullable();
            $table->string('testmonial_name')->nullable();
            $table->string('testmonial_sub_des')->nullable();
            $table->text('testmonial_full_des')->nullable();
            $table->string('discount_image')->nullable();
            $table->string('discount')->nullable();
            $table->string('discount_head')->nullable();
            $table->string('discount_price')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
