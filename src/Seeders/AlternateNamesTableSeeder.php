<?php

namespace Gidiyorum\Geonames\Seeders;

class AlternateNamesTableSeeder extends DatabaseSeeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $path = $this->command->option('path');

        $this->importer->alternateNames('geonames_alternate_names', $path . '/alternateNames.txt');
    }
}
