<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cours extends Model
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
    protected $primaryKey = 'id_Cours';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    Protected $fillable= [
        'id_Cours',
        'nom_Cours',
        'duree_Cours',
        'annee_Academique_Cours',
        'jour_Cours',
        'heure_Debut_Dispenser',
    ];

    /**
     * The table associated with the model.
    */

    protected $table = ['cours'];

    /**
     * Get the salle that owns the cours.
     */

    public function salle()
    {
        return $this->belongsTo('App\Salle','id_Salle','id_Salle');
    }

    /**
     * Get the enseignant who make this cours
     */
    public function enseignant()
    {
        return $this->belongsTo('App\Enseignant','matricule_Enseignant','matricule_Enseignant');
    }

    /**
     * Get the enseignement for the cours
     */
    public function enseignement()
    {
        return $this->belongsTo('App\Enseignement','id_Enseignement','id_Enseignement');
    }

}
