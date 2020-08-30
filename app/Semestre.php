<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semestre extends Model
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
    protected $primaryKey = 'id_Semestre';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    Protected $fillable= [
        'id_Semestre',
        'libelle_Semestre',
        'ordre_Semestre',
    ];

    protected $table = ['semestres'];

}
