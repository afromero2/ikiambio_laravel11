<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Identification extends Model
{
    protected $table = 'identification';     // cambia si tu tabla se llama distinto
    protected $primaryKey = 'identificationID';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = ['identificationID']; // agrega más campos si existen
}
