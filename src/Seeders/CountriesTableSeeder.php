<?php

namespace Gidiyorum\Geonames\Seeders;

class CountriesTableSeeder extends DatabaseSeeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $path = $this->command->option('path');

        $this->importer->countries('geonames_countries', $path . '/countryInfo.txt');
    }
}
