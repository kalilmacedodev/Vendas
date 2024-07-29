<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoSaida extends Model
{
    use HasFactory;

    protected $table = 'tipo_saidas';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'descricao',
        'created_at',
        'updated_at'
    ];

    protected $primaryKey = 'tipo_saida_id';


    // public function entradas(){
    //     return $this->hasMany(EntradaProduto::class, 'produto_id', 'produto_id');
    // }

    public function saidas(){
        return $this->hasMany(SaidaProduto::class, 'tipo_saida_id', 'tipo_saida_id');
    }
}
