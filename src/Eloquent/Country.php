<?php

namespace Gidiyorum\Geonames\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'geonames_countries';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'iso_alpha2';

    /* -(  Relationships  )-------------------------------------------------- */

    public function continent()
    {
        return $this->belongsTo('Gidiyorum\Geonames\Eloquent\Continent');
    }

    public function names()
    {
        return $this->hasMany('Gidiyorum\Geonames\Eloquent\Name');
    }
}
