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
        Schema::create('video_editing_sections', function (Blueprint $table) {
            $table->id();
            $table->text('main_description')->nullable();
            $table->string('main_image')->nullable();
            $table->text('video_service_description')->nullable();
            $table->string('video_service_image')->nullable();
            $table->text('services_description')->nullable();
            $table->text('reliable_description')->nullable();
            $table->string('reliable_image')->nullable();
            $table->text('product_retouch_description_1')->nullable();
            $table->string('product_retouch_video_1a')->nullable();
            $table->string('product_retouch_video_1b')->nullable();
            $table->text('product_retouch_description_2')->nullable();
            $table->string('product_retouch_video_2a')->nullable();
            $table->string('product_retouch_video_2b')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('video_editing_sections');
    }
};
