<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaculteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $vfaculte = Faculte::all();

        return view('index', compact('vfaculte'));
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
         $validatedData = $request->validate([
            'id_faculte' => 'required|unique|max:5',
            'nom_faculte' => 'max:50',
        ],
        [
            //personnalisation des messages
            ‘required’ => ‘Ce champ est obligatoire’,
        ]);

        $show = Faculte::create($validatedData);
   
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        return redirect('/facultes')->with('success', 'Faculté enregistrée avec succès');
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
        $vfaculte = Faculte::findOrFail($id);

        return view('edit', compact('vfaculte'));
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
            'nom_faculte' => 'max:50',
        ]);
        Faculte::whereId($id)->update($validatedData);

        return redirect('/facultes')->with('success', 'Faculté mise à jour avec succès');
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
        $vfaculte = Faculte::findOrFail($id);
        $vfaculte->delete();

        return redirect('/facultes')->with('success', 'Faculté supprimée avec succès');
    }
}
