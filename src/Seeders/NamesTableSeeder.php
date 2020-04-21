<?php

namespace Gidiyorum\Geonames\Seeders;

class NamesTableSeeder extends DatabaseSeeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $path = $this->command->option('path');

        $this->importer->names('geonames_names', $path . '/allCountries.txt');
    }
}
