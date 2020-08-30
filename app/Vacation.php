<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacation extends Model
{

    protected $primaryKey = 'id_Vacation';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    Protected $fillable= [
        'date_Vacation',
        'nombre_Heure_Vacation',
    ];

    /**
     * The table associated with the model.
    */

    protected $table = ['vacations'];

     /**
     * Get the cours for vacation.
    */
    public function cours()
    {
        return $this->belongsTo('App\Cours', 'id_Cours', 'id_Cours');
    }
}
