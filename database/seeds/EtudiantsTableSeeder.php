<?php

use App\Etudiant;
use Illuminate\Database\Seeder;

class EtudiantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('etudiants')->truncate();
        Schema::enableForeignKeyConstraints();

        $etudiant1 = Etudiant::create([
            'num_Etudiant' => 'ET1225',
            'nom_Etudiant' => 'Lewandowski Mikala',
            'prenom_Etudiant' => 'Bastian kingsley',
            'date_Naiss_Etudiant' => '2002-06-21',
            'lieu_Naissance_Etudiant' => 'libreville',
            'situation_Matri_Etudiant' => 'Celibat',
            'annee_Bac_Etudiant' => '2016',
            'serie_Bac_Etudiant' => 'B',
            'tel_Etudiant' => '077153183',
            'email_Etudiant' => 'mikalajuste@gmail.com',
            'origine_Etudiant' => 'LTNOB',
            'sexe_Etudiant' => 'masculin',
            'photo_Etudiant' => 'juste.jpg',
            'user_id' => '1'
        ]);

        $etudiant2 = Etudiant::create([
            'num_Etudiant' => 'ET1825',
            'nom_Etudiant' => 'Dikwedi Otounga',
            'prenom_Etudiant' => 'pauline antoinette',
            'date_Naiss_Etudiant' => '2005-09-02',
            'lieu_Naissance_Etudiant' => 'libreville',
            'situation_Matri_Etudiant' => 'Marié',
            'annee_Bac_Etudiant' => '2015',
            'serie_Bac_Etudiant' => 'A1',
            'tel_Etudiant' => '074444183',
            'email_Etudiant' => 'pauline@uob.ga',
            'origine_Etudiant' => 'MBELE',
            'sexe_Etudiant' => 'Feminin',
            'photo_Etudiant' => 'pauline.jpg',
            'user_id' => '7'
        ]);

        $etudiant3 = Etudiant::create([
            'num_Etudiant' => 'ET1295',
            'nom_Etudiant' => 'Bongo Bekale',
            'prenom_Etudiant' => 'chris junior',
            'date_Naiss_Etudiant' => '2000-05-01',
            'lieu_Naissance_Etudiant' => 'libreville',
            'situation_Matri_Etudiant' => 'Celibat',
            'annee_Bac_Etudiant' => '2015',
            'serie_Bac_Etudiant' => 'CG',
            'tel_Etudiant' => '074878783',
            'email_Etudiant' => 'johan@uob.ga',
            'origine_Etudiant' => 'LTNOB',
            'sexe_Etudiant' => 'masculin',
            'photo_Etudiant' => 'juste.jpg',
            'user_id' => '4'
        ]);

        $etudiant3 = Etudiant::create([
            'num_Etudiant' => 'ET82133',
            'nom_Etudiant' => 'Justinho Mikala',
            'prenom_Etudiant' => 'emmanuel',
            'date_Naiss_Etudiant' => '1990-05-10',
            'lieu_Naissance_Etudiant' => 'libreville',
            'situation_Matri_Etudiant' => 'Marié',
            'annee_Bac_Etudiant' => '2017',
            'serie_Bac_Etudiant' => 'CG',
            'tel_Etudiant' => '066278783',
            'email_Etudiant' => 'emmanuel@uob.ga',
            'origine_Etudiant' => 'LTNOB',
            'sexe_Etudiant' => 'masculin',
            'photo_Etudiant' => 'emmanuel.jpg',
            'user_id' => '6'
        ]);


    }
}
