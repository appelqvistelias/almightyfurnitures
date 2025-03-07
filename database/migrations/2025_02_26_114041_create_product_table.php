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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', length: 100);
            $table->string('image')->nullable(); ///-----new for images.
            $table->text('description')->nullable();
            $table->integer('height')->nullable();
            $table->integer('width')->nullable();
            $table->integer('depth')->nullable();
            $table->decimal('price', total: 8, places: 2)->default(0);
            $table->decimal('weight', total: 8, places: 2)->default(0);
            $table->string('material', length: 100);
            $table->string('colour', length: 100);
            $table->string('brand', length: 100);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
