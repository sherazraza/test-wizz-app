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
        Schema::create('cgi_sections', function (Blueprint $table) {
            $table->id();
            $table->text('main_description')->nullable();
            $table->string('main_image')->nullable();

            $table->text('levelup_3d_description')->nullable();
            $table->text('levelup_cgi_description')->nullable();

            $table->text('crafting_description')->nullable();

            $table->text('amazing_description')->nullable();
            $table->string('amazing_front_image')->nullable();
            $table->string('amazing_back_image')->nullable();

            $table->text('motion_description')->nullable();
            $table->string('motion_image')->nullable();

            $table->text('reliable_description')->nullable();
            $table->string('reliable_image')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cgi_sections');
    }
};
