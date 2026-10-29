<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;

class Producto extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'categoria_id'
    ];

    public function categorias(){
        return $this->belongsTo(Categoria::class);
    }
}
