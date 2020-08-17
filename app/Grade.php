<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
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
    protected $primaryKey = 'id_Grade';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    Protected $fillable= [
        'id_Grade',
        'libelle_Grade',
        'taux_Horaire_Grade',
        'nombre_Heure_Grade',
    ];

    protected $table = ['grades'];
}
