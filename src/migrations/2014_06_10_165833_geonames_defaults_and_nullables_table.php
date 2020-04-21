<?php

use Illuminate\Database\Migrations\Migration;

class GeonamesDefaultsAndNullablesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        // DB::statement('ALTER TABLE geonames_names ALTER COLUMN elevation TYPE INT, ALTER COLUMN elevation SET DEFAULT NULL');
        // DB::statement('ALTER TABLE geonames_countries ALTER COLUMN area TYPE DOUBLE precision, ALTER COLUMN area SET DEFAULT NULL');
        DB::statement('ALTER TABLE geonames_countries ALTER COLUMN phone TYPE VARCHAR(32)');
        DB::statement('ALTER TABLE geonames_countries ALTER COLUMN name_id TYPE INT, ALTER COLUMN name_id SET DEFAULT NULL');
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        // DB::statement('ALTER TABLE geonames_names ALTER COLUMN elevation TYPE INT, ALTER COLUMN elevation SET NOT NULL');
        // DB::statement('ALTER TABLE geonames_countries ALTER COLUMN area TYPE DOUBLE precision, ALTER COLUMN area SET NOT NULL');
        DB::statement('ALTER TABLE geonames_countries ALTER COLUMN phone TYPE VARCHAR(10)');
        DB::statement('ALTER TABLE geonames_countries ALTER COLUMN name_id TYPE INT, ALTER COLUMN name_id SET NOT NULL');
    }
}
