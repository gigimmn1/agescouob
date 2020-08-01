<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculte extends Model
{
    //
    protected $fillable = ['id_faculte','nom_faculte'];

    protected $table = ['facultes'] ;
}
