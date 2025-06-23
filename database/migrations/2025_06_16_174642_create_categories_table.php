<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('photo');
            $table->boolean('is_active')->default(true);
            $table->unsignedBigInteger('parent_cat')->nullable()->default(null);
            $table->timestamps();

            // Foreign key (self-referencing)
            $table->foreign('parent_cat')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
