<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = "countries";

    protected $fillable = [
        'id',
        'nombre',
        'name',
        'nom',
        'iso2',
        'iso3',
        'phone_code',

    ];
}
