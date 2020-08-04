<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    /**
     * The primary key associated with the table.
     *
     * @var int
     */
    protected $primaryKey = 'id_Evaluation';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'libelle_Evaluation',
        'ordre_Evaluation',
        'type_Evaluation',
        'date_Evaluation'
    ];

     /**
     * Get the notes for the evaluation.
     */
    public function note()
    {
        return $this->hasMany('App\Note', 'id_Note', 'id_Note');

    }
}
