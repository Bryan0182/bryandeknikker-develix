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
        Schema::table('blog-develix', function (Blueprint $table) {
            $table->date('publication_date')->nullable();
            $table->string('author')->nullable();
            $table->enum('status', ['concept', 'gepubliceerd'])->default('concept');
            $table->string('featured_image')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
        });
    }

    public function down()
    {
        Schema::table('blog-develix', function (Blueprint $table) {
            $table->dropColumn(['publication_date', 'author', 'status', 'featured_image', 'meta_title', 'meta_description']);
        });
    }
};
