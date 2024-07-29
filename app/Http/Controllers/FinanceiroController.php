<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Gasto;
use App\Models\Produto;
use App\Models\SaidaProduto;
use App\Models\Venda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class FinanceiroController extends Controller
{
    // VENDAS

    public function venda_index(){

        $vendas = Venda::orderBy('created_at', 'desc');

        $vendas = $vendas->paginate(10);

        return view('financeiro.vendas.index', compact('vendas'));
    }

    public function venda_inserir(){

        $produtos = Produto::all();

        $clientes = Cliente::all();

        return view('financeiro.vendas.inserir', compact('produtos', 'clientes'));
    }

    public function venda_store(Request $request){

        $venda = Venda::create([
            'preco' => $request->preco,
            'data' => $request->data,
            'cliente_id' => $request->cliente_id,
            'user_id' => Auth::id(),
        ]);

        //FOREACH PARA SAIDA DE PRODUTOS

        $numero = count($request->produto_id);

        for ($i=0; $i < $numero; $i++) {
            SaidaProduto::create([
                'quantidade' => $request->quantidade[$i],
                'data' => $request->data,
                'produto_id' => $request->produto_id[$i],
                'venda_id' => $venda->venda_id,
                'tipo_saida_id' => 1, // VENDA
                'user_id' => Auth::id(),
            ]);
        }

        Alert::success('Parabéns', 'Venda cadastrada com sucesso!');

        return redirect()->route('financeiro.venda.index');
    }

    public function venda_edit($venda_id){

        $venda = Venda::findOrFail($venda_id);

        $clientes = Cliente::all();

        return view('financeiro.vendas.edit', compact('venda', 'clientes'));
    }

    public function venda_update(Request $request, $venda_id){

        $venda = Venda::findOrFail($venda_id);

        $venda->update([
            'preco' => $request->preco,
            'data' => $request->data,
            'cliente_id' => $request->cliente_id,
            'user_id' => Auth::id(),
        ]);

        Alert::success('Parabéns', 'Venda atualizada com sucesso!');

        return redirect()->route('financeiro.venda.index');
    }

    public function venda_destroy($venda_id){

        $venda = Venda::findOrFail($venda_id);

        foreach ($venda->saidas as $saida) {
            $saida->delete();
        }

        $venda->delete();

        Alert::success('Parabéns', 'Venda excluída com sucesso!');

        return redirect()->route('financeiro.venda.index');
    }


    // GASTOS


    public function gasto_index(){

        $gastos = Gasto::orderBy('data', 'desc');

        $gastos = $gastos->paginate(10);

        return view('financeiro.gastos.index', compact('gastos'));
    }

    public function gasto_inserir(){
        return view('financeiro.gastos.inserir');
    }

    public function gasto_store(Request $request){

        Gasto::create([
            'descricao' => $request->descricao,
            'custo' => $request->custo,
            'data' => $request->data,
            'user_id' => Auth::id(),
        ]);

        // ADICIONAR FOREACH PARA SAIDA DE PRODUTOS

        Alert::success('Parabéns', 'Gasto cadastrado com sucesso!');

        return redirect()->route('financeiro.gasto.index');
    }

    public function gasto_edit($gasto_id){

        $gasto = Gasto::findOrFail($gasto_id);

        $clientes = Cliente::all();

        return view('financeiro.gastos.edit', compact('gasto', 'clientes'));
    }

    public function gasto_update(Request $request, $gasto_id){

        $gasto = Gasto::findOrFail($gasto_id);

        $gasto->update([
            'descricao' => $request->descricao,
            'custo' => $request->custo,
            'data' => $request->data,
            'user_id' => Auth::id(),
        ]);

        Alert::success('Parabéns', 'Gasto atualizado com sucesso!');

        return redirect()->route('financeiro.gasto.index');
    }

    public function gasto_destroy($gasto_id){

        $gasto = Gasto::findOrFail($gasto_id);

        $gasto->delete();

        Alert::success('Parabéns', 'Gasto excluído com sucesso!');

        return redirect()->route('financeiro.gasto.index');
    }

    // CLIENTES


    public function cliente_index(){

        $clientes = Cliente::orderBy('created_at', 'desc');

        $clientes = $clientes->paginate(10);

        return view('financeiro.clientes.index', compact('clientes'));
    }

    public function cliente_inserir(){
        return view('financeiro.clientes.inserir');
    }

    public function cliente_store(Request $request){

        Cliente::create([
            'nome' => $request->nome,
            'contato' => $request->contato,
            'endereco' => $request->endereco,
            'user_id' => Auth::id(),
        ]);

        // ADICIONAR FOREACH PARA SAIDA DE PRODUTOS

        Alert::success('Parabéns', 'Cliente cadastrado com sucesso!');

        return redirect()->route('financeiro.cliente.index');
    }

    public function cliente_edit($cliente_id){

        $cliente = Cliente::findOrFail($cliente_id);

        return view('financeiro.clientes.edit', compact('cliente'));
    }

    public function cliente_update(Request $request, $cliente_id){

        $cliente = cliente::findOrFail($cliente_id);

        $cliente->update([
            'nome' => $request->nome,
            'contato' => $request->contato,
            'endereco' => $request->endereco,
            'user_id' => Auth::id(),
        ]);

        Alert::success('Parabéns', 'Cliente atualizado com sucesso!');

        return redirect()->route('financeiro.cliente.index');
    }

    public function cliente_destroy($cliente_id){

        $cliente = cliente::findOrFail($cliente_id);

        $cliente->delete();

        Alert::success('Parabéns', 'Cliente excluído com sucesso!');

        return redirect()->route('financeiro.cliente.index');
    }
}
