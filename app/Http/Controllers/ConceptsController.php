<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Concept;

class ConceptsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contador = 0;
        $concepts = Concept::orderBy('id', 'DESC')->get();
        return view('concepts.index')
            ->with('contador', $contador)
            ->with('concepts', $concepts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('concepts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $concept = new Concept($request->all());
        $concept->save();

        flash()->success('El concepto <b>' . $concept->descripcion . '</b> se agregó con exito!');
         return redirect()->route('concepts.index');
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
        $concept = Concept::find($id);
        return view('concepts.edit')
            ->with('concept', $concept);
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
        $concept = Concept::find($id);
        $concept->fill($request->all());
        $concept->save();

        flash()->warning('El concepto <b>' . $concept->descripcion . '</b> se actualizo con exito!');
        return redirect()->route('concepts.index');
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
    }
}
