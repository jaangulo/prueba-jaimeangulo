<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //indicar la modelo con que tabla trabaja
    //protected $table = 'categorias';
    // $primarykey = 'id';
    protected $fillable =['nombre','descripcion','condicion'];
// hace referencia articulo
    public function articulos(){
        return $this->hasMany('App\Aritulo');
    }
}
