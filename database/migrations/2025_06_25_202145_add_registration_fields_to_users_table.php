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
        Schema::table('users', function (Blueprint $table) {
            $table->string('edit_image_per_year')->nullable();
            $table->string('edit_image_time')->nullable();
            $table->string('next_upload')->nullable();
            $table->boolean('privacy_policy')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'edit_image_per_year',
                'edit_image_time',
                'next_upload',
                'privacy_policy',
            ]);
        });
    }
};
