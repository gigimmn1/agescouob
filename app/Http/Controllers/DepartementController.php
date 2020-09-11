<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $vdepartement = Departement::all();

        return view('index', compact('vdepartement'));
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
            'id_departement' => 'required|unique|max:10',
            'nom_departement' => 'max:100',
            'id_faculte' => 'required|max:5',
        /*],
        [
            //personnalisation des messages
            ‘required’ => ‘Ce champ est obligatoire’,*/
        ]);

        $show = Departement::create($validatedData);
   
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        return redirect('/departements')->with('success', 'Département enregistré avec succès');
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
        $vdepartement = Departement::findOrFail($id);

        return view('edit', compact('vdepartement'));
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
            'nom_departement' => 'max:100',
            'id_faculte' => 'required|max:5',
        ]);
        Etudiant::whereId($id)->update($validatedData);

        return redirect('/departements')->with('success', 'Département mis à jour avec succès');
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
        $vdepartement = Departement::findOrFail($id);
        $vdepartement->delete();

        return redirect('/departements')->with('success', 'Département supprimé avec succès');
    }
}
