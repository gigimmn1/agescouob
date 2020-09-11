<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $vparent = Parent::all();
        return view('index', compact('vparent'));
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
            'num_parent' => 'required|unique|max:15',
            'nom_parent' => 'required|max:50',
            'profession_parent' => 'required|max:50',
            'tel_parent' => 'required|max:10',
            'prenom_parent' => 'required|max:30',
            'utilisateur_id_utilisateur' => 'required',
            
        /*],
        [
            ‘required’ => ‘Ce champ est obligatoire’*/
        ]);

        $show = Parent::create($validatedData);
   
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        return redirect('/parents')->with('success', 'Parent enregistré avec succès');
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
            'parents' => $id
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
        $vparent = Parent::findOrFail($id);

        return view('edit', compact('vparent'));
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
        $validatedData = $request->validate([
            'num_parent' => 'required|unique|max:15',
            'nom_parent' => 'required|max:50',
            'profession_parent' => 'required|max:50',
            'tel_parent' => 'required|max:10',
            'prenom_parent' => 'required|max:30',
            'utilisateur_id_utilisateur' => 'required',
        ]);
        Parent::whereId($id)->update($validatedData);

        return redirect('/parents')->with('success', 'Parent mis à jour avec succès');
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
        $vparent = Parent::findOrFail($id);
        $vparent->delete();

        return redirect('/parents')->with('success', 'Parent supprimé avec succès');
    }
}
