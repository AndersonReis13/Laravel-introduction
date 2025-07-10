<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    use HasFactory;

    protected $fillable = [
        'usuario_id',
        'pizzaria_id',
        'pedido_id',
        'nota',
        'comentario'
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

    public function pizzaria()
    {
        return $this->belongsTo(Pizzaria::class);
    }

    public function pedido()
    {
        return $this->belongsTo(Pedido::class);
    }
}
