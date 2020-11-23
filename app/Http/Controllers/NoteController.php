<?php

namespace App\Http\Controllers;

use App\Note;
use App\User;
use App\Etudiant;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notes = Note::all();
        $etudiants = Etudiant::all();  
        return view('notes.index')->with('notes', $notes)->with('etudiants', $etudiants);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'libelle_note'=>'required'
        ]);

        $note = new Note([
            'libelle_note' => $request->input('libelle_note')
        ]);
        $note->save();
        return redirect('/notes')->with('success', 'Note Enregistré !');
    }


    public function show(Note $note)
    {
        
    }


    public function edit(Note $note)
    {
        
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
        $request->validate([
            'libelle_note'=>'required'
        ]);

        $note = Note::find($id);
        $note->libelle_note =  $request->get('libelle_note');
        $note->save();

        return redirect('/notes')->with('success', 'Note modifié!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Note $note)
    {
        $note = Note::find($id);
        $note->delete();

        return redirect('/notes')->with('success', 'Note supprimé !');
    }
}
