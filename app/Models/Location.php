<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = 'location';
    protected $primaryKey = 'locationID';
    public $timestamps = false;
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['id_INEC', 'higherGeographyID', 'continent', 'waterBody', 'islandGroup', 'island', 'country', 'countryCode', 'stateProvince', 'county', 'municipality', 'locality', 'verbatimLocality', 'verbatimElevation', 'verbatimDepth', 'locationRemarks', 'decimalLatitude', 'decimalLongitude', 'geodeticDatum', 'verbatimLatitude', 'verbatimLongitude', 'verbatimCoordinateSystem', 'verbatimSRS', 'georeferencedBy', 'georeferencedDate', 'georeferenceVerificationStatus', 'georeferenceRemarks'];
}
