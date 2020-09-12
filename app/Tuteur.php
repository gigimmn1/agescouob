<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tuteur extends Model
{
    //j ai changé le nom de la classe parce que le mot Parent est reservé au system 

    protected $table = 'parents';
    
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
