<?php

namespace App\Http\Controllers;

use App\Models\Creditos;
use App\Models\Doador;
use App\Models\Peca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Importe a classe DB

class PecaController extends Controller
{
    public function retirarPeca(Request $request)
    {
        $request->validate([
            'codigo' => 'required|string',
            'email_retirar' => 'required|string',
            'valor_retirar' => 'required|integer'
        ]);

        $peca = Peca::where('codigo', strtoupper($request->codigo))->get();

        if(!$peca){
            return '<h1>Peça não encontrada!</h1>';
        }

        $doador = Doador::where('email', mb_strtoupper($request->email_retirar, 'UTF-8'))->get();

        if(!$doador){
            return '<h1>Doador não encontrado!</h1>';
        }

        Peca::destroy($peca[0]->id);

        $doador[0]->fill([
            'total_creditos' => ($doador[0]->total_creditos - $request->valor_retirar),
            'creditos_usados' => ($doador[0]->creditos_usados + $request->valor_retirar),
        ]);
        $doador[0]->save();

        return '<h1>Peça retirada com sucesso!</h1>';
    }

    public function criarPeca(Request $request)
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

        $doador[0]->fill([
            'total_creditos' => ($doador[0]->total_creditos + $creditos->credito)
        ]);
        $doador[0]->save();

        // return view('dashboard');
        return '<h1>Peça cadastrada com sucesso!</h1>';
    }
}
