<?php

namespace App\Http\Controllers;

use App\Models\producto;
use App\Models\Categoria;
use App\Models\Marca;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the products.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "aquí va a ir el catálogo de productos ";
    }

    /**
     * Show the form for creating a new producto.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Seleccionar todas las marcas
        $marcas = Marca::all();
        //Seleccionar todas las categorias
        $categorias = Categoria::all();
        //mostrar la vista de nuevo producto, enviandoles los datos de marcas y categorias.       
        return view('productos.create' )
            ->with('marcas' , $marcas)
            ->with('categorias' , $categorias); 

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        //Crear un nuevo producto:
        $p = new Producto();
        $p->nombre = $r->nombre;
        $p->descripción = $r->desc;
        $p->precio = $r->precio;
        $p->marca_id = $r->marca;
        $p->categoria_id = $r->categoria;
        //grabar producto
        $p->save();
        echo "producto guardado";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show($producto)
    {
        echo "aquí van el detalle del producto con ID: $producto";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($producto)
    {
        echo "aquí va el formulario para actualizar producto";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(producto $producto)
    {
        //
    }
}
