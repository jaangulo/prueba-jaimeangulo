<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    //resivir y almazenar los campos
    protected $fillable =[
        'idcategoria','codigo','nombre','precio_venta','stock','descripcion','condicion'
    ];
    //referencia al modelo categoria
    public function categoria(){
        return $this->belongsTo('App\Categoria');
    }
}
