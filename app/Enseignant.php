<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
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
    protected $primaryKey = 'matricule_Enseignant';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    Protected $fillable= [
        'matricule_Enseignant',
        'nom_Enseignant',
        'prenom_Enseignant',
        'telephone_Enseignant',
        'adresse_Enseignant',
        'email_Enseignant',
        'type_Enseignant',
        'taux_Horaire',
        'nbre_Heure_Enseignant',
        'grade_Enseignant',
    ];

    /**
     * The table associated with the model.
    */

    protected $table = ['enseignants'];

     /**
     * Get the grade that owns the enseignant.
    */
    public function grade()
    {
        return $this->belongsTo('App\Grade', 'id_Grade', 'id_Grade');
    }

    /**
     * Get the cours done by a enseignant
     */
    public function cours()
    {
        return $this->hasMany('App\Cours', 'id_Cours', 'id_Cours');
    }

    /**
     * Get the users who is a enseignant.
     */
    public function users()
    {
        return $this->belongsTo('App\User');
    }

}
