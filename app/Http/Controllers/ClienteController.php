<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Lista os clientes do banco de dados
     * 
     * @return View|Factory 
     */


    /**
     * Mostra o formulário de cadastro de clientes
     * 
     * @return View|Factory 
     */

     public function index() {

        $clientes = Client::get();
 
        return view('clientes.index', [
            'clientes' => $clientes
        ]);
    }

   /**
     * Mostra o formulário de cadastro de clientes
     * 
     * @return View|Factory 
     */
    public function create() {
        return view('clientes.create');
    }

    /**
     * Grava o cliente no banco de dados
     */
    public function store(Request $request) {

        $request->validate([
            'nome' => ['required', 'min:3'],
            'documento_1' => ['required']
        ]);

        $dados = $request->all();
        $tam = count($dados);
        echo "TAM $tam";

        $novoCliente = new Client;

        foreach ($dados as $k => $v) {
            if($k != '_token') {
                $pos = strpos($k, 'data_');
                if ($pos === false) {
                    $novoCliente->$k = $request->$k;
                } else {
                    $novoCliente->$k = date('Y-m-d', strtotime($request->$k));
                }
            }
        }
        $novoCliente->save();

        return redirect('/clientes');
    }
}
