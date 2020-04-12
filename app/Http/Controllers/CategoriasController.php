<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //almacenar todo el metodo all de la calse categoria  
        $categorias = Categoria::all();
        return $categorias;
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $categorias = new Categoria();
        //assede a cada una de las propuedades
        $categorias->nombre = $request->nombre;
        $categorias->descripcion = $request->descripcion;
        $categorias->condicion = '1';
       //para inserta este objecto enla table categoria de la base de datos
        $categoria->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //es similar al store realiza una comprovacion antes de salvar los datos
        $categorias =  Categoria::findOrFail($request->id);
        //assede a cada una de las propuedades
        $categorias->nombre = $request->nombre;
        $categorias->descripcion = $request->descripcion;
        $categorias->condicion = '1';
       //para inserta este objecto enla table categoria de la base de datos
        $categoria->save();
    }

    public function desactivar(Request $request)
    {
        $categorias =  Categoria::findOrFail($request->id);
        $categorias->condicion = '0';
       //para inserta este objecto enla table categoria de la base de datos
        $categoria->save();
    }

    public function activar(Request $request)
    {
        $categorias =  Categoria::findOrFail($request->id);
        $categorias->condicion = '1';
       //para inserta este objecto enla table categoria de la base de datos
        $categoria->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
