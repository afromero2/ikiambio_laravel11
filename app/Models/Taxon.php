<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Taxon extends Model
{
    protected $table = 'taxon';
    protected $primaryKey = 'taxonID';
    public $timestamps = false;
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['scientificNameID', 'scientificName', 'namePublishedIn', 'namePublishedInYear', 'higherClassification', 'kingdom', 'phylum', 'class', 'order', 'family', 'genus', 'subgenus', 'specificEpithet', 'intraspecificEpithet', 'taxonRank', 'verbatimTaxonRank', 'scientificNameAuthorship', 'vernacularName', 'taxonomicStatus', 'taxonRemarks'];
}
