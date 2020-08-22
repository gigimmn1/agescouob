<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
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
    protected $primaryKey = 'id_Agent';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */

    protected $fillable = ['id_Agent','nom_Agent','prenom_Agent','tel_Agent','fonction_Agent','id_Utilisateur'];

    protected $table = ['agents'];
}
