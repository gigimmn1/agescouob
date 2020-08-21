<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acte_Administratif extends Model
{
    //
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;

    /**
     * The primary key associated with the table.
     *
     * @var char
     */
    protected $primaryKey = 'id_Acte_Administratif';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */

    protected $fillable = ['id_Acte_Administratif','date_Acte_Administratif','reference_Acte_Administratif',
    						'signataire_Acte_Administratif','type_Acte_Administratif','id_Demande_Acte'];

    protected $table = ['acte_administratifs'];
}
