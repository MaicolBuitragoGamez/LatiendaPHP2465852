<?php

namespace App\Http\Controllers;

use App\Models\producto;
use App\Models\Categoria;
use App\Models\Marca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductoController extends Controller
{
    /**
     * Display a listing of the products.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*
        echo "aquí va a ir el catálogo de productos ";
        */

        //Seleccionar todos los productos

        $productos = Producto::all();
        
        //Mostrar vista del catalogo de productos
        //Llevando la lista de productos

        return view('productos.index')
        ->with('productos', $productos);
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
        //Validaciones
            //1. Establecer reglas de validación

            $reglas = [

                "nombre" => 'required|alpha|unique:productos,nombre',
                "desc" => 'required|min:5|max:25',
                "precio" => 'required|numeric',
                "imagen" => 'required|image|',
                "marca" => 'required',
                "categoria" => 'required'
                

            ];

            //2. Crear el objeto validador

            $v = Validator::make($r->all(), $reglas );

            //3. Validar

            //die(var_dump($v -> errors()));]
            
            if($v -> fails()){

                //si la validacion fallo
                //redirigir a la vista de create(ruta: productos/create)

                return redirect('productos/create')
                         ->withErrors($v);

            }else{

                //validacion exitosa

                //examinar archivo cargado

            $archivo= $r -> imagen;

            // Obtener el nombre original del archivo

            $nombre_archivo = $archivo->getClientOriginalName();

            //establecer la ubicacion guardado del archivo

            $ruta = public_path()."/img";

            //MOVER ARCHIVO IMAGEN A LA UBICACION Y NOMBRE DESEADOS

            $archivo->move($ruta, $nombre_archivo);



        //Crear un nuevo producto:

        $p = new Producto();
        $p->nombre = $r->nombre;
        $p->descripcion = $r->desc;
        $p->precio = $r->precio;
        $p->marca_id = $r->marca;
        $p->categoria_id = $r->categoria;
        $p->imagen = $nombre_archivo;
        //grabar producto
        $p->save();
        //redirigir a prductos/create
        //con un mensaje exito
        return redirect('productos/create') 
                 ->with('mensajito' , 'Producto registrado exitosamente');
    }

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
