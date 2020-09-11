<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentJointController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $vdocumentjoint = Document_Joint::all();

        return view('index', compact('vdocumentjoint'));
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
            //'id_Document_Joint' => )->unique();
            'observations_Document_Joint' => 'max:255',
            'reference_Document_Joint' => 'max:30',
            'type_Document_Joint' => 'max:30',
            'fichier_Document_Joint' => 'max:100',
            'id_Demande_Acte' => 'required|numeric'
        /*],
        [
            //personnalisation des messages
            ‘required’ => ‘Ce champ est obligatoire’,
            ‘alpha’ => ‘Saisir uniquement des lettres’,
            ‘email’ => ‘Format email incorrect’*/
        ]);

        $show = Document_Joint::create($validatedData);
   
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        return redirect('/document_joints')->with('success', 'Document joint enregistré avec succès');
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
            'document_joints' => $id
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
        $vdocumentjoint = Document_Joint::findOrFail($id);

        return view('edit', compact('vdocumentjoint'));
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
        //Mise ç jour de Document joint
        $validatedData = $request->validate([
            'observations_Document_Joint' => 'max:255',
            'reference_Document_Joint' => 'max:30',
            'type_Document_Joint' => 'max:30',
            'fichier_Document_Joint' => 'max:100',
            'id_Demande_Acte' => 'required|numeric'
        ]);
        Etudiant::whereId($id)->update($validatedData);

        return redirect('/document_joints')->with('success', 'Document joint mis à jour avec succès');
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
        //Suppression du document joint
        $vdocumentjoint = Document_Joint::findOrFail($id);
        $vdocumentjoint->delete();

        return redirect('/document_joints')->with('success', 'Document joint supprimé avec succès');
    }
}
