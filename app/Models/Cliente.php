<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome',
        'contato',
        'segundo_contato',
        'endereco',
        'user_id',
        'created_at',
        'updated_at'
    ];

    protected $primaryKey = 'cliente_id';

    public function renda_no_mes(){
        return $this->vendas()->whereMonth('data', date('m'))->sum('preco');
    }


    public function vendas(){
        return $this->hasMany(Venda::class, 'cliente_id', 'cliente_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}
