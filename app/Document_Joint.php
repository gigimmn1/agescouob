<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document_Joint extends Model
{
    //
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;

    /**
     * The primary key associated with the table.
     *
     * @var char
     */
    protected $primaryKey = 'id_Document_Joint';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */

    protected $fillable = ['id_Document_Joint','observations_Document_Joint','reference_Document_Joint','type_Document_Joint',
    						'fichier_Document_Joint','id_Demande_Acte'];

    protected $table = ['document_joints'];
}
