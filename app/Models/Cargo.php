<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use app\models\{
    user
};

class Cargo extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'cargo';
    protected $primaryKey = 'id_cargo';
    protected $dates = ['created_at','updated_at','deleted_at'];
    // campos que podem ser visualizados/ manipulados fora da classe

    protected $fillable = [
        'cargo'
    ];

    /**
     * --------------------------------------
     * RELACIONAMENTOS
     * --------------------------------------
     */

     public function usuarios() :object {
        return $this->belongsTo(User::class,
                                 'id_cargo',
                                 'id_cargo');
     }
}
