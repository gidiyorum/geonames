<?php

namespace Gidiyorum\Geonames\Seeders;

class AdminDivionsTableSeeder extends DatabaseSeeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $path = $this->command->option('path');

        $this->importer->adminDivions('geonames_admin_divisions', $path . '/admin1CodesASCII.txt');
    }
}
