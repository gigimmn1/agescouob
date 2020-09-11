<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemandeActeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $vdemandeacte = Demande_Acte::all();

        return view('index', compact('vdemandeacte'));
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
        //
        //Validation des informations
        $validatedData = $request->validate([
            //'id_Demande_Acte')->unique();
            'statut_Demande_Acte' => 'max:30',
            'date_Demande_Acte' => 'date(format(dd/mm/yyyy))',
            'ressource_Demande_Acte' => 'max:50',
            'observations_Demande_Acte' => 'max:255',
            'type_Demande_Acte' => 'max:30',
            'date_Retrait_Demande_Acte' => 'date(format(dd/mm/yyyy))',
            'id_Inscription' => 'required|numeric'
        /*],
        [
            //personnalisation des messages
            ‘required’ => ‘Ce champ est obligatoire’,
            ‘alpha’ => ‘Saisir uniquement des lettres’,
            ‘email’ => ‘Format email incorrect’*/
        ]);

        $show = Demande_Acte::create($validatedData);
   
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        return redirect('/demande_actes')->with('success', 'Demande acte administratif enregistré avec succès');
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
        return view('show', [
            'demande_actes' => $id
        ]);
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
        $vdemandeacte = Demande_Acte::findOrFail($id);

        return view('edit', compact('vdemandeacte'));
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
        //
        //Mise ç jour de Etudiant
        $validatedData = $request->validate([
            'statut_Demande_Acte' => 'max:30',
            'date_Demande_Acte' => 'date(format(dd/mm/yyyy))',
            'ressource_Demande_Acte' => 'max:50',
            'observations_Demande_Acte' => 'max:255',
            'type_Demande_Acte' => 'max:30',
            'date_Retrait_Demande_Acte' => 'date(format(dd/mm/yyyy))',
            'id_Inscription' => 'required|numeric'
        ]);
        Demande_Acte::whereId($id)->update($validatedData);

        return redirect('/demande_actes')->with('success', 'Demande acte administratif mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        //Suppression de l'étudiant
        $vdemandeacte = Demande_Acte::findOrFail($id);
        $vdemandeacte->delete();

        return redirect('/demande_actes')->with('success', 'Demande acte administratif supprimé avec succès');
    }
}
