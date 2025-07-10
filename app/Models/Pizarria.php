<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizarria extends Model
{
    use HasFactory;

    protected $fillable = [
        'usuario_id',
        'nome_fantasia',
        'razao_social',
        'descricao',
        'logo_url',
        'capa_url',
        'telefone',
        'cnpj',
        'horario_abertura',
        'horario_fechamento',
        'endereco_principal_id',
        'taxa_entrega',
        'tempo_entrega_minimo',
        'tempo_entrega_maximo',
        'pedido_minimo',
        'aceita_cartao',
        'aceita_dinheiro',
        'ativo',
    ];

     protected $casts = [
        'ativo' => 'boolean',
        'pedido_minimo' => 'decimal:2',
        'taxa_entrega' => 'decimal:2',
    ];

    public function usuario()
    {
        return this->belongsTo(User::class, 'usuario_id');
    }

    public function enderecoPrincipal()
    {
        return $this->morphMany(Endereco::class);
    }

    public function produtos()
    {
        return $this->hasMany(Produto::class);
    }
}
