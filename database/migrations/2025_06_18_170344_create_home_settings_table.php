<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeSettingsTable extends Migration
{
    public function up()
    {
        Schema::create('home_settings', function (Blueprint $table) {
            $table->id();

            // Hero Section
            $table->string('hero_title')->nullable();
            $table->text('hero_description')->nullable();
            $table->string('hero_image_1')->nullable();
            $table->string('hero_image_2')->nullable();
            $table->string('hero_image_3')->nullable();
            $table->string('hero_image_4')->nullable();

            // Client Section
            $table->string('client_title')->nullable();
            $table->text('client_description')->nullable();
            $table->json('client_images')->nullable(); // Multiple images

            // Snapshots Section
            $table->integer('brands')->nullable();
            $table->integer('employees')->nullable();
            $table->integer('sft_space')->nullable();
            $table->integer('delivered_photos')->nullable();

            // Reviews Section
            $table->string('review_name')->nullable();
            $table->string('review_designation')->nullable();
            $table->text('review_text')->nullable();
            $table->string('review_image')->nullable();
            $table->string('company_logo')->nullable();

            // Video Editing Services
            $table->string('video_editing_title')->nullable();
            $table->text('video_editing_description')->nullable();
            $table->string('video_editing_image')->nullable();

            // 3D and CGI Model Section
            $table->string('cgi_title')->nullable();
            $table->text('cgi_description')->nullable();
            $table->json('cgi_videos')->nullable(); // Multiple video links/files

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('home_settings');
    }
}
