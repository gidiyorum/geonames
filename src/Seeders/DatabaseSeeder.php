<?php

namespace Gidiyorum\Geonames\Seeders;

use Gidiyorum\Geonames\Importer;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * The importer instance.
     *
     * @var \Gidiyorum\Geonames\Importer
     */
    protected $importer;

    /**
     * Create a new Seeder instance.
     *
     * @param \Gidiyorum\Geonames\Importer $importer
     */
    public function __construct(Importer $importer)
    {
        $this->importer = $importer;
    }
}
