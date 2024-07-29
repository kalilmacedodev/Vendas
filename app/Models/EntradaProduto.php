<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntradaProduto extends Model
{
    use HasFactory;

    protected $table = 'entrada_produtos';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'quantidade',
        'data',
        'produto_id',
        'user_id',
        'created_at',
        'updated_at'
    ];

    protected $primaryKey = 'entrada_produtos_id';


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
