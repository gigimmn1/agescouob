<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CycleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $vcycle = Cycle::all();

        return view('index', compact('vcycle'));
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
        // Validation des informations
        $validatedData = $request->validate([
            'id_Cycle' => 'required|unique|max:10',
            'libelle_Cycle' => 'max:15',
         /*],
       [
            //personnalisation des messages
            ‘required’ => ‘Ce champ est obligatoire’,*/
        ]);

        $show = Cycle::create($validatedData);
   
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        return redirect('/cycles')->with('success', 'Cycle enregistré avec succès');
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
        $vcycle = Cycle::findOrFail($id);

        return view('edit', compact('vcycle'));
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
            'libelle_Cycle' => 'max:15',
        ]);
        Cycle::whereId($id)->update($validatedData);

        return redirect('/cycles')->with('success', 'Cycle mis à jour avec succès');
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
        //Suppression du cycle
        $vcycle = Cycle::findOrFail($id);
        $vcycle->delete();

        return redirect('/cycles')->with('success', 'Cycle supprimé avec succès');
    }
}
