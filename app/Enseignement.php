<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enseignement extends Model
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
    protected $primaryKey = 'id_Enseignement';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    Protected $fillable= [
        'id_Enseignement',
        'libelle_Enseignement',
        'coeff_Enseignement',
        'volume_Horaire_Enseignement',
        'nombre_Heure_Enseignement',
        'nombre_Heure_Cm',
        'nombre_Heure_Td',
        'nombre_Heure_Tp',
    ];

    /**
     * The table associated with the model.
    */

    protected $table = ['enseignements'];

     /**
     * Get the evaluation that owns the enseignement.
    */
    public function evaluation()
    {
        return $this->hasMany('App\Evaluation', 'id_Evaluation', 'id_Evaluation');
    }

    /**
     * Get the cours for the enseignement.
     */
    public function cours()
    {
        return $this->hasMany('App\Cours', 'id_Cours', 'id_Cours');
    }

    /**
     * Get the unite_enseignemnt for enseignement.
     */
    public function unite_enseingnement()
    {
        return $this->belongsTo('App\Unite_Enseingnement','id_Unite_Enseignement','id_Unite_Enseignement');
    }

    /**
     * Get the classe for the enseignement.
     */
    public function classe()
    {
        return $this->belongsTo('App\Classe','id_Classe','id_Classe');
    }

    /**
     * Get the semestre for the enseignement.
     */
    public function semestre()
    {
        return $this->belongsTo('App\Semestre','id_Semestre','id_Semestre');
    }
}
