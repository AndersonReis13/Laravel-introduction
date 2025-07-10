<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    protected $fillable = [
        'cep',
        'logradouro',
        'numero',
        'complemento',
        'bairro',
        'cidade',
        'uf',
        'latitude',
        'longitude',
        'principal'
    ];

    protected $casts = [
        'cep' => 'string',
        'principal' => 'boolean',
        'latitude' => 'float',
        'longitude' => 'float',
    ];

    public function enderecavel()
    {
        return $this->morphTo();
    }

}
