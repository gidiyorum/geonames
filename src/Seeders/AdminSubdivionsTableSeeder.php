<?php

namespace Gidiyorum\Geonames\Seeders;

class AdminSubdivionsTableSeeder extends DatabaseSeeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $path = $this->command->option('path');

        $this->importer->adminDivions('geonames_admin_subdivisions', $path . '/admin2Codes.txt');
    }
}
