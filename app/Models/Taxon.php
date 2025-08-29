<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Taxon extends Model
{
    protected $table = 'taxon';        // cambia si tu tabla se llama distinto
    protected $primaryKey = 'taxonID';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = ['taxonID']; // agrega más campos si existen
}


