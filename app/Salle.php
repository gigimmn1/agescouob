<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salle extends Model
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
    protected $primaryKey = 'id_Salle';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    Protected $fillable= [
        'id_Salle',
        'nom_Salle',
    ];

    /**
     * The table associated with the model.
    */

    protected $table = ['salles'];

     /**
     * Get the batiment that owns the salle.
    */
    public function batiment()
    {
        return $this->belongsTo('App\Batiment', 'id_Batiment', 'id_Batiment');
    }
    
}
