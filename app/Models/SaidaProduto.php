<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaidaProduto extends Model
{
    use HasFactory;

    protected $table = 'saida_produtos';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'quantidade',
        'data',
        'tipo_saida_id',
        'venda_id',
        'produto_id',
        'user_id',
        'created_at',
        'updated_at'
    ];

    protected $primaryKey = 'saida_produtos_id';


    public function tipo_saida(){
        return $this->belongsTo(TipoSaida::class, 'tipo_saida_id', 'tipo_saida_id');
    }

    public function venda(){
        return $this->belongsTo(Venda::class, 'venda_id', 'venda_id');
    }

    public function produto(){
        return $this->belongsTo(Produto::class, 'produto_id', 'produto_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    // public function saidas(){
    //     return $this->hasMany(SaidaProduto::class, 'venda_id', 'venda_id');
    // }
}
