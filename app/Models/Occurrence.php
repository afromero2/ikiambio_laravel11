<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Occurrence extends Model
{
    protected $table = 'occurrence';
    protected $primaryKey = 'id_occ_bd';
    public $timestamps = false;
    public $incrementing = true;
    protected $keyType = 'int';
    protected $fillable = ['occurrenceID', 'record_level_id', 'catalogNumber', 'recordNumber', 'recordedBy', 'individualCount', 'organismQuantity', 'organismQuantityType', 'sex', 'lifeStage', 'reproductiveCondition', 'behavior', 'substrate', 'establishmentMeans', 'preparations', 'disposition', 'associatedMedia', 'associatedSequences', 'associatedTaxa', 'otherCatalogNumbers', 'occurrenceRemarks', 'organismID', 'locationID', 'taxonID', 'identificationID'];
}
