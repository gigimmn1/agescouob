<?php

namespace App\Http\Controllers;

use App\Evaluation;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evaluations = Evaluation::all();
        return view('evaluations.index', compact('evaluations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('evaluations.create');
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
            'libelle_Evaluation'=>'required',
            'ordre_Evaluation'=>'required',
            'type_Evaluation'=>'required',
            'date_Evaluation'=>'required'
        ]);

        $evaluation = new Evaluation([
            'libelle_Evaluation' => $request->get('libelle_Evaluation'),
            'ordre_Evaluation' => $request->get('ordre_Evaluation'),
            'type_Evaluation' => $request->get('type_Evaluation'),
            'date_Evaluation' => $request->get('date_Evaluation')
        ]);
        $evaluation->save();
        return redirect('/evaluations')->with('success', 'Evaluation Enregistré !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Evaluation  $evaluation
     * @return \Illuminate\Http\Response
     */
    public function show(Evaluation $id)
    {
        return view('evaluations.show', [
            'evaluation' => $id
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Evaluation  $evaluation
     * @return \Illuminate\Http\Response
     */
    public function edit(Evaluation $id)
    {
        $evaluation = Evaluation::find($id);
        return view('evaluations.edit', compact('evaluation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Evaluation  $evaluation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evaluation $id)
    {
        $request->validate([
            'libelle_Evaluation'=>'required',
            'ordre_Evaluation'=>'required',
            'type_Evaluation'=>'required',
            'date_Evaluation'=>'required'
        ]);

        $evaluation = Evaluation::find($id);
        $evaluation->libelle_Evaluation =  $request->get('libelle_Evaluation');
        $evaluation->ordre_Evaluation =  $request->get('ordre_Evaluation');
        $evaluation->type_Evaluation =  $request->get('type_Evaluation');
        $evaluation->date_Evaluation =  $request->get('date_Evaluation');
        $evaluation->save();

        return redirect('/evaluations')->with('success', 'Evaluation modifié!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Evaluation  $evaluation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evaluation $id)
    {
        $evaluation = Evaluation::find($id);
        $evaluation->delete();

        return redirect('/evaluations')->with('success', 'Evaluation supprimé !');
    }
}
