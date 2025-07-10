<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemOpcao extends Model
{
    use HasFactory;

    protected $fillable = [
      'produto_id',
      'nome',
      'obrigatorio',
      'limite'
    ];

    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }

    public function itens()
    {
        return $this->hasMany(ItemOpcaoItem::class);
    }
}
