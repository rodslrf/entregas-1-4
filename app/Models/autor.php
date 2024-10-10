<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class autor extends Model
{
    use HasFactory;
    protected $table = 'autor';
    protected $fillable = [
        'nome', 'validade', 'peso',
        'tamanho', 'preco', 'cod_produto'
    ];
}
