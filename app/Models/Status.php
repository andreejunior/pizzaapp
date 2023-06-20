<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $table = 'status';
    protected $primaryKey = 'id_status';
    protected $dates = ['created_at','updated_at','deleted_at'];
    // campos que podem ser visualizados/ manipulados fora da classe
    protected $fillable = [
        'status'
    ];
}
