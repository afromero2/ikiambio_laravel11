<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = 'location';      // cambia si tu tabla se llama distinto
    protected $primaryKey = 'locationID';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = ['locationID']; // agrega más campos si existen
}
