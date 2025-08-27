<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecordLevel extends Model
{
    protected $table = 'record_level';
    protected $primaryKey = 'record_level_id';
    public $timestamps = false;
    public $incrementing = true;
    protected $keyType = 'int';
    protected $fillable = ['type', 'modified', 'language', 'license', 'rightsHolder', 'accessRights', 'bibliographicCitation', 'references', 'institutionID', 'collectionID', 'datasetID', 'institutionCode', 'collectionCode', 'datasetName', 'ownerInstitutionCode', 'basisOfRecord', 'informationWithheld', 'dataGeneralizations'];
}
