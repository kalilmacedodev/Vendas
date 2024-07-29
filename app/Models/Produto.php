<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $table = 'produtos';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome',
        'nome_unidade',
        'preco',
        'base64_imagem',
        'created_at',
        'updated_at'
    ];

    protected $primaryKey = 'produto_id';

    public function em_estoque(){

        $entrada = $this->entradas->sum('quantidade');
        $saida = $this->saidas->sum('quantidade');

        $em_estoque = $entrada - $saida;

        return $em_estoque;
    }

    public function unidades_vendidas_no_mes(){
        $unidades = $this->saidas()->whereMonth('data', date('m'))->sum('quantidade');
        return $unidades;
    }

    public function entradas(){
        return $this->hasMany(EntradaProduto::class, 'produto_id', 'produto_id');
    }

    public function saidas(){
        return $this->hasMany(SaidaProduto::class, 'produto_id', 'produto_id');
    }
}
