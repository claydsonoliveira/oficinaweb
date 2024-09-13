<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Segment;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\OficinaWebRequest;

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

        $clientes = Client::with('budgets')->paginate(5);

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
        $clientes = Client::with('segments')->get();

        $seguimentos = Segment::orderBy('seguimento')->get();

//        dd($seguimentos);

        return view('clientes.create',[
            'clientes' => $clientes,
            'seguimentos' => $seguimentos
        ]);
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

        try {
            DB::beginTransaction();
            
            Client::create($dados);

            DB::commit();

        } catch (\Throwable $th) {
            DB::rollBack();

            return redirect()
            ->back()
            ->withInput()
            ->withErrors('Erro ao criar novo Cliente');

        }

        
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
        return redirect()
            ->route('clientes.index')
            ->with('mensagem', 'Cliente Cadastrado com Sucesso');
    }


    public function edit(Client $cliente) {

        /*

            # retirado para ficar mais enxuto e alterando o method acima public function edit($clienteId) para o atual


            $cliente = Client::where('id', $clienteId)->first();

            $cliente = Client::findOrFail($clienteId);

        */
        $seguimentos = Segment::orderBy('seguimento')->get();


        return view('clientes.edit', compact('cliente'), [
            'seguimentos' => $seguimentos
        ]);
    }

    public function update(OficinaWebRequest $request, Client $cliente) {
        $dados = $request->except(['_token', '_method']);

        /*

            # retirado para ficar mais enxuto e alterando o method acima public function update(Request $request, $clienteId) para o atual


            $cliente = Client::where('id', $clienteId)->first();

            $cliente = Client::findOrFail($clienteId);

        */

        try {
            DB::beginTransaction();
            
            $cliente->update($dados);

            DB::commit();

        } catch (\Throwable $th) {
            DB::rollBack();

            return redirect()
            ->back()
            ->withInput()
            ->withErrors('Erro ao atualizar Cliente');

        }


;;        $cliente->update($dados);
        return redirect()
            ->route('clientes.index')
            ->with('mensagem', 'Cliente Alterado com Sucesso');
    }

    public function destroy(Request $request, Client $cliente) {
        $dados = $request->except(['_token', '_method']);

        /*

            # retirado para ficar mais enxuto e alterando o method acima public function update(Request $request, $clienteId) para o atual


            $cliente = Client::where('id', $clienteId)->first();

            $cliente = Client::findOrFail($clienteId);

        */

        $cliente->delete($dados);
        return redirect()
            ->route('clientes.index')
            ->with('mensagem', 'Cliente Excluido com Sucesso');
    }

}
