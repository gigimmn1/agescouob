<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActeAdministratifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $vacteadministratif = Acte_Administratif::all();

        return view('index', compact('vacteadministratif'));
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
            //'id_Acte_Administratif')->unique();
            'date_Acte_Administratif' => 'date(format(dd/mm/yyyy))',
            'reference_Acte_Administratif' => 'max:20',
            'signataire_Acte_Administratif' => 'max:50',
            'type_Acte_Administratif' => 'max:15',
            'id_Demande_Acte' => 'numeric'
        /*],
        [
            //personnalisation des messages
            ‘required’ => ‘Ce champ est obligatoire’,
            ‘alpha’ => ‘Saisir uniquement des lettres’,
            ‘email’ => ‘Format email incorrect’*/
        ]);

        $show = Acte_Administratif::create($validatedData);
   
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        return redirect('/acte_administratifs')->with('success', 'Acte administratif enregistré avec succès');
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
            'acte_administratifs' => $id
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
        $vacteadministratif = Acte_Administratif::findOrFail($id);

        return view('edit', compact('vacteadministratif'));
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
            'date_Acte_Administratif' => 'date(format(dd/mm/yyyy))',
            'reference_Acte_Administratif' => 'max:20',
            'signataire_Acte_Administratif' => 'max:50',
            'type_Acte_Administratif' => 'max:15',
            'id_Demande_Acte' => 'numeric'
        ]);
        Acte_Administratif::whereId($id)->update($validatedData);

        return redirect('/acte_administratifs')->with('success', 'Acte administratif mis à jour avec succès');
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
        $vacteadministratif = Acte_Administratif::findOrFail($id);
        $vacteadministratif->delete();

        return redirect('/acte_administratifs')->with('success', 'Acte administratif supprimé avec succès');
    }
}
