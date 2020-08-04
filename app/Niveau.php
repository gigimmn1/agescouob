<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Niveau extends Model
{
    //
	protected $fillable = ['id_niveau','libelle_niveau','ordre_niveau'];
	protected $table = ['niveaux'];
}
