<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemPedido extends Model
{
    use HasFactory;

    protected $fillable = [
        'opcao_id',
        'nome',
        'preco_adicional',
    ];

    public function opcao()
    {
        return $this->belongsTo(ItemOpcao::class);
    }
}
