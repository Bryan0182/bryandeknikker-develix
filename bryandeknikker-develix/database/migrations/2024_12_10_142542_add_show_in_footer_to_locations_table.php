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
        Schema::table('location-develix', function (Blueprint $table) {
            $table->boolean('show_in_footer')->default(false);
        });
    }

    public function down()
    {
        Schema::table('location-develix', function (Blueprint $table) {
            $table->dropColumn('show_in_footer');
        });
    }
};
