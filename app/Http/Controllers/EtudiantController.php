<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//ajout de Etudiant
use App\Etudiant ;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $vetudiant = Etudiant::all();

        return view('index', compact('vetudiant'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validation des informations
        $validatedData = $request->validate([
            'num_Etudiant' => 'required|unique|max:15',
            'nom_Etudiant' => 'required|max:50',
            'prenom_Etudiant' => 'required|max:50',
            'date_naiss_Etudiant' => 'date(format(dd/mm/yyyy))',
            'lieu_naissance_Etudiant' => 'max:30',
            'situation_matri_etudiant' => 'max:10',
            'annee_bac_etudiant' => 'numeric|max:4',
            'num_parent' => 'numeric',
            'id_utilisateur' => 'numeric',
            'serie_bac_etudiant' => 'max:4',
            'tel_Etudiant' => 'numeric|max:9',
            'email_Etudiant' => 'required|email',
            'origine_Etudiant' => 'max:30',
            'sexe_Etudiant' => 'max:10',
            'photo_Etudiant' => => 'max:50',
        ],
        [
            //personnalisation des messages
            ‘required’ => ‘Ce champ est obligatoire’,
            ‘alpha’ => ‘Saisir uniquement des lettres’,
            ‘email’ => ‘Format email incorrect’
        ]);

        $show = Etudiant::create($validatedData);
   
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        return redirect('/etudiants')->with('success', 'Etudiant enregistré avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $vetudiant = Etudiant::findOrFail($id);

        return view('edit', compact('vetudiant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Mise ç jour de Etudiant
        $validatedData = $request->validate([
            'nom_Etudiant' => 'required|max:50',
            'prenom_Etudiant' => 'required|max:50',
            'date_naiss_Etudiant' => 'date(format(dd/mm/yyyy))',
            'lieu_naissance_Etudiant' => 'max:30',
            'situation_matri_etudiant' => 'max:10',
            'annee_bac_etudiant' => 'numeric|max:4',
            'num_parent' => 'numeric',
            'id_utilisateur' => 'numeric',
            'serie_bac_etudiant' => 'max:4',
            'tel_Etudiant' => 'numeric|max:9',
            'email_Etudiant' => 'required|email',
            'origine_Etudiant' => 'max:30',
            'sexe_Etudiant' => 'max:10',
            'photo_Etudiant' => => 'max:50',
        ]);
        Etudiant::whereId($id)->update($validatedData);

        return redirect('/etudiants')->with('success', 'Etudiant mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Suppression de l'étudiant
        $vetudiant = Etudiant::findOrFail($id);
        $vetudiant->delete();

        return redirect('/etudiants')->with('success', 'Etudiant supprimé avec succès');
    }
}
