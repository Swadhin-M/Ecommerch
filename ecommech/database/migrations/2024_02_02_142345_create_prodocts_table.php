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
        Schema::create('prodocts', function (Blueprint $table) {
            $table->id();
            $table->string('photo');
            $table->string('name');
            $table->text('discription');
            $table->string('price');
            $table->string('subcatagory_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prodocts');
    }
};