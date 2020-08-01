<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    //
    protected $fillable = ['id_departement','nom_departement','id_faculte'];
    protected $table = ['departements'];
}
