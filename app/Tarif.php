<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarif extends Model
{
    //
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
    protected $primaryKey = 'id_Tarif';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */

    protected $fillable = ['id_Tarif','somme_Tarif','annotations_Tarif'];

    protected $table = ['tarifs'];
}
