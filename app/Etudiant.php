<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    //
    protected $fillable = ['num_Etudiant','nom_Etudiant','prenom_Etudiant','date_naiss_Etudiant','lieu_naissance_Etudiant','situation_matri_etudiant','annee_bac_etudiant','num_parent','id_utilisateur','serie_bac_etudiant','tel_Etudiant','email_Etudiant','origine_Etudiant','sexe_Etudiant','photo_Etudiant'];

    protected $table = ['Etudiant'] ;
}
