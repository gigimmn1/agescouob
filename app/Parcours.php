<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parcours extends Model
{
    //
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
    protected $primaryKey = 'id_Parcours';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */

    protected $fillable = ['id_Parcours','libelle_Parcours','id_Classe'];

    protected $table = ['parcours'];
}
