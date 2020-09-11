<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $vagent = Agent::all();

        return view('index', compact('vagent'));
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
            //'id_Agent')->unique();
            'nom_Agent' => 'required|max:30',
            'prenom_Agent' => 'required|max:30',
            'tel_Agent' => 'max:10',
            'fonction_Agent' => 'max:60',
            'id_Utilisateur' => 'required|numeric'
        /*],
        [
            //personnalisation des messages
            ‘required’ => ‘Ce champ est obligatoire’,
            ‘alpha’ => ‘Saisir uniquement des lettres’,
            ‘email’ => ‘Format email incorrect’*/
        ]);

        $show = Agent::create($validatedData);
   
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        return redirect('/agents')->with('success', 'Agent enregistré avec succès');
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
            'agents' => $id
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
        $vagent = Agent::findOrFail($id);

        return view('edit', compact('vagent'));
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
           //'id_Agent')->unique();
            'nom_Agent' => 'required|max:30',
            'prenom_Agent' => 'required|max:30',
            'tel_Agent' => 'max:10',
            'fonction_Agent' => 'max:60',
            'id_Utilisateur' => 'required|numeric'
        ]);
        Agent::whereId($id)->update($validatedData);

        return redirect('/agents')->with('success', 'Agent mis à jour avec succès');
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
        $vagent = Agent::findOrFail($id);
        $vagent->delete();

        return redirect('/agents')->with('success', 'Agent supprimé avec succès');
    }
}
