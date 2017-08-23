<?php

namespace App\Http\Controllers;

use App\Entrada;
use App\Valore;
use Illuminate\Http\Request;

class EntradasController extends Controller
{

    public function index()
    {
        return view('layout');
    }


    public function create()
    {
        $entrada = new Entrada();
        $val = Valore::get();
        return view('entrada', ['ent' => $entrada, 'valores' =>$val]);
    }


    public function store(Request $request, Entrada $entrada)
    {

        $categoria = $request->input('categoria');
        $placa = $request->input('placa');
        $datetime = $request->input('datetime');

        $val = new Valore();

        $val = $val->find($categoria);

        $val->entrada()->updateOrCreate(['placa' => $placa, 'entrada' => $datetime]);

        $ent = $entrada->get();

        return view('listagem', ['entradas' => $ent]);

    }


    public function show(Entrada $entrada)
    {
        $ent = $entrada->get();
        return view('listagem', ['entradas' => $ent]);
    }


    public function edit($id)
    {
        $ent = Entrada::findOrFail($id);
        $val = Valore::get();
        return view('entrada', ['entradas' => $ent, 'valores' =>$val]);

    }


    public function update($id, Request $request)
    {

        $ent = Entrada::findOrFail($id);

        $categoria = $request->input('categoria');
        $placa = $request->input('placa');

        $ent->valores_id = $categoria;
        $ent->placa = $placa;

        $ent->save();

        return view('entrada'); //('listegem');

    }


    public function delete($id)
    {
        $ent = Entrada::findOrFail($id);
        $ent->delete();
        $ent = Entrada::get();
        return view('listagem', ['entradas' => $ent]);
    }
}
