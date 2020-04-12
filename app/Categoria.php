<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //indicar la modelo con que tabla trabaja
    protected $table = 'categorias';
    protected $primarykey = 'id';
    protected $fillable =['nombre','descripcion','condicion'];
}
