<?php

namespace App\Http\Controllers;

use App\Models\EntradaProduto;
use App\Models\Produto;
use App\Models\SaidaProduto;
use App\Models\TipoSaida;
use App\Models\Venda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AlmoxarifadoController extends Controller
{
    // PRODUTOS

    public function produto_index(){

        $produtos = Produto::orderBy('created_at', 'desc');

        $produtos = $produtos->paginate(10);

        return view('almoxarifado.produtos.index', compact('produtos'));
    }

    public function produto_inserir(){
        return view('almoxarifado.produtos.inserir');
    }

    public function produto_store(Request $request){

        $imagem = null;

        if($request->imagem){
            $imagem = "data:image/{$request->file('imagem')->getClientOriginalExtension()};base64,".base64_encode(file_get_contents($request->file('imagem')));
        }

        Produto::create([
            'nome' => $request->nome,
            'nome_unidade' => $request->nome_unidade,
            'preco' => $request->preco,
            'base64_imagem' => $imagem,
        ]);

        Alert::success('Parabéns', 'Produto cadastrado com sucesso!');

        return redirect()->route('almoxarifado.produto.index');
    }

    public function produto_edit($produto_id){

        $produto = Produto::findOrFail($produto_id);

        return view('almoxarifado.produtos.edit', compact('produto'));
    }

    public function produto_update(Request $request, $produto_id){

        $produto = Produto::findOrFail($produto_id);

        $imagem = "data:image/{$request->file('imagem')->getClientOriginalExtension()};base64,".base64_encode(file_get_contents($request->file('imagem')));

        $produto->update([
            'nome' => $request->nome,
            'nome_unidade' => $request->nome_unidade,
            'preco' => $request->preco,
            'base64_imagem' => $imagem,
        ]);

        Alert::success('Parabéns', 'Produto atualizado com sucesso!');

        return redirect()->route('almoxarifado.produto.index');
    }

    // public function produto_destroy($produto_id){

    //     $produto = Produto::findOrFail($produto_id);

    //     $produto->delete();

    //     Alert::success('Parabéns', 'produto excluída com sucesso!');

    //     return redirect()->route('almoxarifado.produto.index');

    // }


    // ENTRADA


    public function entrada_index(){

        $entradas = EntradaProduto::orderBy('created_at', 'desc');

        $entradas = $entradas->paginate(10);

        return view('almoxarifado.entrada.index', compact('entradas'));
    }

    public function entrada_inserir(){

        $produtos = Produto::all();

        return view('almoxarifado.entrada.inserir', compact('produtos'));
    }

    public function entrada_store(Request $request){

        EntradaProduto::create([
            'quantidade' => $request->quantidade,
            'data' => $request->data,
            'produto_id' => $request->produto_id,
            'user_id' => Auth::id(),
        ]);

        Alert::success('Parabéns', 'Entrada cadastrada com sucesso!');

        return redirect()->route('almoxarifado.entrada.index');
    }

    public function entrada_edit($entrada_id){

        $produtos = Produto::all();

        $entrada = EntradaProduto::findOrFail($entrada_id);

        return view('almoxarifado.entrada.edit', compact('entrada', 'produtos'));
    }

    public function entrada_update(Request $request,$entrada_id){

        $entrada = EntradaProduto::findOrFail($entrada_id);

        $entrada->update([
            'quantidade' => $request->quantidade,
            'data' => $request->data,
            'produto_id' => $request->produto_id,
            'user_id' => Auth::id(),
        ]);

        Alert::success('Parabéns', 'Entrada atualizada com sucesso!');

        return redirect()->route('almoxarifado.entrada.index');
    }

    public function entrada_destroy($entrada_id){

        $entrada = EntradaProduto::findOrFail($entrada_id);

        $entrada->delete();

        Alert::success('Parabéns', 'Entrada excluída com sucesso!');

        return redirect()->route('almoxarifado.entrada.index');

    }


    // SAIDA


    public function saida_index(){

        $saidas = SaidaProduto::orderBy('created_at', 'desc');

        $saidas = $saidas->paginate(10);

        return view('almoxarifado.saida.index', compact('saidas'));
    }

    public function saida_inserir(){

        $produtos = Produto::all();

        $tipos_saida = TipoSaida::all();

        $vendas = Venda::orderBy('created_at', 'desc')->get(['venda_id', 'data', 'cliente_id', 'preco']);

        return view('almoxarifado.saida.inserir', compact('produtos', 'tipos_saida', 'vendas'));
    }

    public function saida_store(Request $request){

        if($request->tipo_saida_id == 1){
            $request->validate(['venda_id' => ['required']]);
        }

        SaidaProduto::create([
            'quantidade' => $request->quantidade,
            'data' => $request->data,
            'produto_id' => $request->produto_id,
            'venda_id' => $request->venda_id,
            'tipo_saida_id' => $request->tipo_saida_id,
            'user_id' => Auth::id(),
        ]);

        Alert::success('Parabéns', 'Entrada cadastrada com sucesso!');

        return redirect()->route('almoxarifado.saida.index');
    }

    public function saida_edit($saida_id){

        $produtos = Produto::all();

        $tipos_saida = TipoSaida::all();

        $vendas= Venda::all();

        $saida = SaidaProduto::findOrFail($saida_id);

        return view('almoxarifado.saida.edit', compact('saida', 'produtos', 'tipos_saida', 'vendas'));
    }

    public function saida_update(Request $request,$saida_id){

        if($request->tipo_saida_id == 1){
            $request->validate(['venda_id' => ['required']]);
        }

        $saida = SaidaProduto::findOrFail($saida_id);

        $saida->update([
            'quantidade' => $request->quantidade,
            'data' => $request->data,
            'produto_id' => $request->produto_id,
            'venda_id' => $request->venda_id,
            'tipo_saida_id' => $request->tipo_saida_id,
            'user_id' => Auth::id(),
        ]);

        Alert::success('Parabéns', 'Saída atualizada com sucesso!');

        return redirect()->route('almoxarifado.saida.index');
    }

    public function saida_destroy($saida_id){

        $saida = SaidaProduto::findOrFail($saida_id);

        $saida->delete();

        Alert::success('Parabéns', 'Saída excluída com sucesso!');

        return redirect()->route('almoxarifado.saida.index');
    }
}
