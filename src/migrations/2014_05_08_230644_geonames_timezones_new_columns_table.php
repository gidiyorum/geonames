<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GeonamesTimezonesNewColumnsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('geonames_timezones', function (Blueprint $table) {
            $table->decimal('raw_offset', 3, 1);
            $table->string('country_code', 2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('geonames_timezones', function (Blueprint $table) {
            $table->dropColumn('country_code', 'raw_offset');
        });
    }
}
