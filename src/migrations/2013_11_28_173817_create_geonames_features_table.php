<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeonamesFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('geonames_features', function (Blueprint $table) {
            $table->string('code', 7);
            $table->string('name', 200);
            // $table->text('description');

            $table->primary('code');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('geonames_features');
    }
}
