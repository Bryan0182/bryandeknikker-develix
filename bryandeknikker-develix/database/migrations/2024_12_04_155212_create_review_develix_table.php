<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewDevelixTable extends Migration
{
    public function up()
    {
        Schema::create('review-develix', function (Blueprint $table) {
            $table->id();
            $table->text('review');
            $table->string('auteur');
            $table->string('functie');
            $table->string('bedrijf');
            $table->string('website')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('review-develix');
    }
}
