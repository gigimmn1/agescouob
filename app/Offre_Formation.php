<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offre_Formation extends Model
{
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The primary key associated with the table.
     *
     * @var char
     */
    protected $primaryKey = 'id_Offre_Formation';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    Protected $fillable= [
        'id_Offre_Formation',
        'nom_Offre_Formation',
    ];

    protected $table = ['offres_formations'];
}
