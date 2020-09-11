<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    protected $fillable = [
        'num_Etudiant',
        'nom_Etudiant',
        'prenom_Etudiant',
        'date_Naiss_Etudiant',
        'lieu_Naissance_Etudiant',
        'situation_Matri_Etudiant',
        'annee_Bac_Etudiant',
        'num_Parent',
        'utilisateur_Id_Utilisateur',
        'serie_Bac_Etudiant',
        'tel_Etudiant',
        'email_Etudiant',
        'origine_Etudiant',
        'sexe_Etudiant',
        'photo_Etudiant'
    ];

    protected $table = 'etudiants';
}
