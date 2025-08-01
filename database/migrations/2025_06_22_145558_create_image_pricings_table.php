<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('image_pricings', function (Blueprint $table) {
            $table->id();
            $table->text('description')->nullable();
            $table->decimal('base_price', 10, 2)->nullable();
            $table->text('base_price_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('image_pricings');
    }
};
