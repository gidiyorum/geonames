<?php

use Illuminate\Database\Migrations\Migration;

class GeonamesAdminDivisionsLongerCodeTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        DB::statement('ALTER TABLE geonames_admin_divisions ALTER COLUMN code TYPE VARCHAR(32), ALTER COLUMN code SET NOT NULL');
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        DB::statement('ALTER TABLE geonames_admin_divisions ALTER COLUMN code TYPE VARCHAR(6), ALTER COLUMN code SET NOT NULL');
    }
}
