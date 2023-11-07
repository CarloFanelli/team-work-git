<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cardgames', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('type')->nullable();
            $table->float('price', 6, 2)->unsigned();
            $table->string('collection', 50)->nullable();
            $table->text('thumb')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cardgames');
    }
};
