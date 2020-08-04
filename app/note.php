<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    /**
     * The primary key associated with the table.
     *
     * @var int
    */
    protected $primaryKey = 'id_Note';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = [
        'libelle_Note',
        'valeur_Note',
        'id_Evaluation',
        'id_Inscription'
    ];

    /**
     * Get the inscription that owns the note.
    */
    public function inscription()
    {
        return $this->belongsTo('App\Inscription', 'id_Inscription', 'id_Inscription');
    }

    /**
     * Get the evaluation that owns the note.
    */
    public function evaluation()
    {
        return $this->belongsTo('App\Evaluation', 'id_Evaluation', 'id_Evaluation');
    }
    

 

}
