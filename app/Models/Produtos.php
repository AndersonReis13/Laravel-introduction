<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    use HasFactory;

    protected $fillable = [
        'pizzaria_id',
        'categoria_id',
        'nome',
        'descricao',
        'preco',
        'imagem_url',
        'disponivel',
        'destaque'
    ];

    public function pizzaria()
    {
        return $this->belongsTo(Pizzaria::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

}
