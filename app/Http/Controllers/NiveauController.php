<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NiveauController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $vniveau = Niveau::all();

        return view('index', compact('vniveau'));
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
            'id_niveau' => 'required|unique|max:2',
            'libelle_niveau' => 'max:15',
            'ordre_niveau' => 'numeric',
        /*],
        [
            //personnalisation des messages
            ‘required’ => ‘Ce champ est obligatoire’,*/
        ]);

        $show = Niveau::create($validatedData);
   
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        return redirect('/niveaux')->with('success', 'Niveau enregistré avec succès');
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
        $vniveau = Niveau::findOrFail($id);

        return view('edit', compact('vniveau'));
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
        //Mise a jour de Niveau
        $validatedData = $request->validate([
            'libelle_niveau' => 'max:15',
            'ordre_niveau' => 'numeric',
        ]);
        Niveau::whereId($id)->update($validatedData);

        return redirect('/niveaux')->with('success', 'Niveau mis à jour avec succès');
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
        //Suppression du Niveau
        $vniveau = Niveau::findOrFail($id);
        $vniveau->delete();

        return redirect('/niveaux')->with('success', 'Niveau supprimé avec succès');
    }
}
