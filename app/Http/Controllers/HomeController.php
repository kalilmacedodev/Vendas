<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Gasto;
use App\Models\Produto;
use App\Models\Venda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home(){

        $renda = Venda::whereMonth('data', date('m'))->sum('preco');

        $gasto = Gasto::whereMonth('data', date('m'))->sum('custo');

        $lucro = $renda - $gasto;

        $clientes = Cliente::orderBy('nome', 'asc')->get();
        $produtos = Produto::orderBy('nome', 'asc')->get();

        return view('home', compact('clientes', 'produtos', 'renda', 'gasto', 'lucro'));
    }
}
