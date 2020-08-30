<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unites_Enseignements extends Model
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
    protected $primaryKey = 'id_Unite_Enseignement';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    Protected $fillable= [
        'id_Unite_Enseignement',
        'libelle_Unite_Enseignement',
        'credit_Unite_Enseignement',
        'moyenne_Unite_Enseignement',
    ];

    protected $table = ['unites_enseignements'];

    /**
     * Get the offre_formation for unite_enseignement
     */
    public function offre_formation()
    {
        return $this->belongsTo('App\Offre_Formation', 'id_Offre_Formation', 'id_Offre_Formation');
    }
}
