@extends('layouts.principal')

@section ('contenido')

    <div class="row">

        <h1>Catálogo de productos</h1>

    </div>

    @foreach($productos as $producto)
     

    <div class="row">
        <div class="col s12 m6">
          <div class="card">
            <div class="card-image">
              <h1>{{$producto->nombre}}</h1>
                <img src="{{ asset('img/'.$producto->imagen) }}">
            </div>
            <div class="card-content">
              <p>{{ $producto->descripcion }}</p>
              <ul>
                <li>
                    Precio:${{  $producto->precio }}
                    <li>
                        Categoria: {{  $producto->categoria->nombre }}
                    </li>
                    <li>
                        Marca: {{  $producto->marca->nombre }}
                    </li>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    @endforeach

@endsection
