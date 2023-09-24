<?php

namespace App\Http\Controllers;

use App\Models\Creditos;
use App\Models\Doador;
use App\Models\Peca;
use Illuminate\Http\Request;

class PecaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pecas.store');
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
            'cor' => 'required|string',
            'tipo' => 'required|string',
            'material' => 'required|string',
            'email_doador' => 'required|string',
            'creditos' => 'required|integer',
        ]);
        
        $peca = new Peca();
        $peca->cor = mb_strtoupper($request->cor, 'UTF-8');
        $peca->tipo = mb_strtoupper($request->tipo, 'UTF-8');
        $peca->material = mb_strtoupper($request->material, 'UTF-8');
        $peca->codigo = mb_strtoupper($request->codigo, 'UTF-8');
        $peca->save();
        
        $doador = Doador::where('email', mb_strtoupper($request->email_doador, 'UTF-8'))->get();
        $peca_cadastrada = Peca::where('codigo', mb_strtoupper($request->codigo, 'UTF-8'))->get();

        $creditos = new Creditos();

        $creditos->doador_id = $doador[0]->id;
        $creditos->peca_id = $peca_cadastrada[0]->id;
        $creditos->credito = $request->creditos;
        $creditos->save();

        return '<h1>Peca cadastrada com sucesso!</h1>';
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
