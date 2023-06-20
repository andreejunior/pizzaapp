<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamanho extends Model
{
    use HasFactory;

    protected $table = 'tamanho';
    protected $primaryKey = 'id_tamanho';
    protected $dates = ['created_at','updated_at','deleted_at'];
    // campos que podem ser visualizados/ manipulados fora da classe
    protected $fillable = [
        'tamanho'
    ];
}
