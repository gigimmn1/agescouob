<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
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
    protected $primaryKey = 'id_Classe';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    Protected $fillable= [
        'id_Classe',
        'nom_Classe',
    ];

    protected $table = ['classes'];

    /**
     * Get the departement that owns the classe.
     */
    public function departement()
    {
        return $this->belongsTo('App\Departement','id_departement','id_departement');
    }

    /**
     * Get the niveau that owns the classe.
     */
    public function niveau()
    {
        return $this->belongsTo('App\Niveau','id_niveau','id_niveau');
    }


}
