<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    use HasFactory;

    protected $table = 'vendas';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'preco',
        'data',
        'cliente_id',
        'user_id',
        'created_at',
        'updated_at'
    ];

    protected $primaryKey = 'venda_id';


    public function cliente(){
        return $this->belongsTo(Cliente::class, 'cliente_id', 'cliente_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function saidas(){
        return $this->hasMany(SaidaProduto::class, 'venda_id', 'venda_id');
    }
}
