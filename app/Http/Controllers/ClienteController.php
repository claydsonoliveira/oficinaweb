<?php

namespace App\Http\Controllers;

use App\Http\Requests\OficinaWebRequest;
use App\Models\Client;
use GuzzleHttp\Promise\Create;
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

        $clientes = Client::with('budgets')->get();

        /**
         * 
         * INCLUIR LINHA ABAIXO SE A LINHA SUPERIOR ESTIVER ASSIM $clientes = Client::get();  
         */

//        $clientes->load('budgets');

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
    public function store(OficinaWebRequest $request) {

/*
        $request->validate([
            'nome' => ['required', 'min:3'],
            'documento_1' => ['required', 'integer']
        ]);
*/

//        $dados = $request->all();
        $dados = $request->except('_token');

        Client::create($dados);
        
//        $tam = count($dados);
//        echo "TAM $tam";


/*
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
*/
        return redirect('/clientes');
    }
}
