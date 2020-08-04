<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    /**
     * The primary key associated with the table.
     *
     * @var int
     */
    protected $primaryKey = 'id_Inscription';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'statut_Inscription',
        'promotion_Inscription',
        'nbre_Unite_A_Valider',
        'num_Etudiant'
    ];

    /**
     * Get the notes for the Inscription..
     */
    public function note()
    {
        return $this->hasMany('App\Note', 'id_Note', 'id_Note');

    }
}
