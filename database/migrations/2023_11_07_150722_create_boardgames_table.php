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
        Schema::create('boardgames', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->text('thumb')->nullable();
            $table->text('description')->nullable();
            $table->string('category', 40)->nullable();
            $table->tinyInteger('min_age')->nullable()->unsigned();
            $table->float('price', 8, 2)->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boardgames');
    }
};
