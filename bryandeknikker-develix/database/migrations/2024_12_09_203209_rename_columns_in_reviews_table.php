<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameColumnsInReviewsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('review-develix', function (Blueprint $table) {
            $table->renameColumn('review', 'content');
            $table->renameColumn('auteur', 'author');
            $table->renameColumn('functie', 'role');
            $table->renameColumn('bedrijf', 'company');
            $table->renameColumn('website', 'website_url');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('review-develix', function (Blueprint $table) {
            $table->renameColumn('content', 'review');
            $table->renameColumn('author', 'auteur');
            $table->renameColumn('role', 'functie');
            $table->renameColumn('company', 'bedrijf');
            $table->renameColumn('website_url', 'website');
        });
    }
}
