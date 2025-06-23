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
        Schema::create('video_pricing_packages', function (Blueprint $table) {
            $table->id();
            $table->string('package_name');
            $table->decimal('starting_price', 10, 2)->nullable();
            $table->text('services')->nullable(); // JSON encoded array or comma-separated
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('video_pricing_packages');
    }
};
