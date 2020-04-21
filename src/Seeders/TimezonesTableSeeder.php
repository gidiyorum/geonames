<?php

namespace Gidiyorum\Geonames\Seeders;

class TimezonesTableSeeder extends DatabaseSeeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $path = $this->command->option('path');

        $this->importer->timezones('geonames_timezones', $path . '/timeZones.txt');
    }
}
