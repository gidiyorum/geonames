<?php

namespace Gidiyorum\Geonames\Seeders;

class CountryNamesTableSeeder extends DatabaseSeeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $path = $this->command->option('path');
        $country = $this->command->option('country');

        $this->importer->names('geonames_names', $path . '/' . $country . '.txt');
    }
}
