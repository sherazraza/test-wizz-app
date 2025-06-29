<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemovePhotoAndParentCatFromCategoriesTable extends Migration
{
    public function up()
    {
        Schema::table('categories', function (Blueprint $table) {
            // Drop foreign key first
            $table->dropForeign(['parent_cat']);

            // Now drop the columns
            $table->dropColumn(['photo', 'parent_cat']);
        });
    }

    public function down()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->string('photo')->nullable();
            $table->unsignedBigInteger('parent_cat')->nullable();

            // Restore foreign key (if needed)
            $table->foreign('parent_cat')->references('id')->on('categories')->onDelete('set null');
        });
    }
}
