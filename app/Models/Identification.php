<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Identification extends Model
{
    protected $table = 'identification';
    protected $primaryKey = 'identificationID';
    public $timestamps = false;
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['identificationQualifier', 'typeStatus', 'identifiedBy', 'dateIdentified', 'identificationVerificationStatus', 'identificationRemarks'];
}
