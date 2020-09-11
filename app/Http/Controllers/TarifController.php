<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TarifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $vtarif = Tarif::all();

        return view('index', compact('vtarif'));
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
            'id_Tarif' => 'required|unique|max:5',
            'somme_Tarif' => 'required|numeric',
            'annotations_Tarif' => 'max:255'            
        /*],
        [
            //personnalisation des messages
            ‘required’ => ‘Ce champ est obligatoire’,
            ‘alpha’ => ‘Saisir uniquement des lettres’,
            ‘email’ => ‘Format email incorrect’*/
        ]);

        $show = Tarif::create($validatedData);
   
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        return redirect('/tarifs')->with('success', 'Tarif enregistré avec succès');
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
            'tarifs' => $id
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
        $vtarif = Parcours::findOrFail($id);

        return view('edit', compact('vtarif'));
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
        //Mise ç jour de Tarif
        $validatedData = $request->validate([
            'somme_Tarif' => 'required|numeric',
            'annotations_Tarif' => 'max:255'  
        ]);
        Parcours::whereId($id)->update($validatedData);

        return redirect('tarifs')->with('success', 'Tarif mis à jour avec succès');
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
        $vtarif = Tarif::findOrFail($id);
        $vtarif->delete();

        return redirect('/tarifs')->with('success', 'Tarif supprimé avec succès');
    }
}
