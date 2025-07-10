<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = [
        'usuario_id',
        'pizzaria_id',
        'endereco_id',
        'codigo',
        'status',
        'subtotal',
        'taxa_entrega',
        'desconto',
        'total',
        'observacoes'
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
    public function pizzaria()
    {
        return $this->belongsTo(Pizzaria::class);
    }
    public function endereco()
    {
        return $this->belongsTo(Endereco::class);
    }
}
