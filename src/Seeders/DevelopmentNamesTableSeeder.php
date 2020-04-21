<?php

namespace Gidiyorum\Geonames\Seeders;

class DevelopmentNamesTableSeeder extends DatabaseSeeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $path = $this->command->option('path');

        $this->importer->names('geonames_names', $path . '/cities15000.txt');
    }
}
