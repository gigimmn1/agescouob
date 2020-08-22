<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demande_Acte extends Model
{
    //
	public $incrementing = true;

    /**
     * The primary key associated with the table.
     *
     * @var char
     */
    protected $primaryKey = 'id_Demande_Acte';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */

    protected $fillable = ['id_Demande_Acte','statut_Demande_Acte','date_Demande_Acte','ressource_Demande_Acte',
    						'observations_Demande_Acte','type_Demande_Acte','date_Retrait_Demande_Acte','id_Inscription'];

    protected $table = ['demande_actes'];    
}
