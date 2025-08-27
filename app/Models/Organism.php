<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organism extends Model
{
    protected $table = 'organism';
    protected $primaryKey = 'organismID';
    public $timestamps = false;
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['associatedOccurrences', 'associatedOrganisms', 'previousIdentifications'];
}
