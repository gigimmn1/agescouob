<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculte extends Model
{
    //
    protected $fillable = ['id_Faculte','nom_Faculte'];

    protected $table = ['facultes'] ;
}
