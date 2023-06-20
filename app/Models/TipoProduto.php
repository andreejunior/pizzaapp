<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipoProduto extends Model
{
    use HasFactory;

    protected $table = 'tipo_produtos';
    protected $primaryKey = 'id_produto';
    protected $dates = ['created_at','updated_at','deleted_at'];
    // campos que podem ser visualizados/ manipulados fora da classe
    protected $fillable = [
        'produto'
    ];
}
