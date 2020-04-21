<?php

namespace Gidiyorum\Geonames\Seeders;

class LanguageCodesTableSeeder extends DatabaseSeeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $path = $this->command->option('path');

        $this->importer->languageCodes('geonames_language_codes', $path . '/iso-languagecodes.txt');
    }
}
