<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cycle extends Model
{
    //
    protected $fillable = ['id_Cycle','libelle_Cycle'];
     protected $table = ['cycles'];
}
