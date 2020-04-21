<?php

namespace Gidiyorum\Geonames\Seeders;

class FeaturesTableSeeder extends DatabaseSeeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $path = $this->command->option('path');

        $this->importer->features('geonames_features', $path . '/featureCodes_en.txt');
    }
}
