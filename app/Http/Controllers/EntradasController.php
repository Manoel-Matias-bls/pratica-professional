<?php

namespace App\Http\Controllers;

use App\Entrada;
use App\Valore;
use Illuminate\Http\Request;

class EntradasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layout');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $entrada = new Entrada();
        return view('entrada', ['ent' => $entrada]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Entrada $entrada)
    {

        $categoria = $request->input('categoria');
        $placa = $request->input('placa');
        $datetime = $request->input('datetime');

        $val = new Valore();

        $val = $val->find($categoria);

        $val->entrada()->create(['placa' => $placa, 'entrada' => $datetime]);

        $ent = $entrada->get();
        return view('listagem', ['entradas' => $ent]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Entrada  $entrada
     * @return \Illuminate\Http\Response
     */
    public function show(Entrada $entrada)
    {
        $ent = $entrada->get();
        return view('listagem', ['entradas' => $ent]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Entrada  $entrada
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ent = Entrada::findOrFail($id);

        return view('entrada', ['entradas' => $ent]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Entrada  $entrada
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
//        $ent = Entrada::findOrFail($id);
//
//        $ent->update($request->all());
//
//        return view('listagem');

        $categoria = $request->input('categoria');
        $placa = $request->input('placa');
        $datetime = $request->input('datetime');

        $val = new Valore();

        $val = $val->find($categoria);

        $val->entrada()->update(['placa' => $placa, 'entrada' => $datetime]);

        return view('entrada');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Entrada  $entrada
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entrada $entrada)
    {
        //
    }
}
