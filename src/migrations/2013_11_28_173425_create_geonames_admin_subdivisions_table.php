<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeonamesAdminSubdivisionsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('geonames_admin_subdivisions', function (Blueprint $table) {
            $table->string('code', 50)->index();
            $table->text('name');
            // $table->text('name_ascii');
            $table->integer('name_id')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('geonames_admin_subdivisions');
    }
}
