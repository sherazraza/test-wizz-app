<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/xxxx_xx_xx_create_about_us_sections_table.php

    public function up()
    {
        Schema::create('about_us_sections', function (Blueprint $table) {
            $table->id();
            $table->longText('who_description')->nullable();
            $table->text('who_quote')->nullable();
            $table->string('who_image')->nullable();
            $table->json('who_images')->nullable();

            $table->longText('how_started_description')->nullable();
            $table->string('how_started_image')->nullable();

            $table->longText('together_description')->nullable();

            $table->text('goal_description')->nullable();

            $table->text('team_description')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us_sections');
    }
};
