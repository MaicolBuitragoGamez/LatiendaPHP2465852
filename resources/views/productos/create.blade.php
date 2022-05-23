@extends('layouts.principal')
@section('contenido')


<Style>
    .col{
        padding-left: 50px;
    }
</Style>
        <form class="col s8" method="POST" action="{{ route('productos.store') }}">
          @csrf 
            <div class="row">
                <div class="col s8">
                    <h1 class="cyan darken-3">Nuevo producto de la tienda</h1>
                </div>
            </div>

          <div class="row">
            <div class="input-field col s6">
              <input name="nombre" placeholder="Nombre del producto" id="nombre" type="text" class="validate">
              <label for="nombre">Nombre del producto</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s8">
              <input name="desc" id="desc" type="text" class="validate">
              <label for="desc">Descripción</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s8">
              <input name="precio" id="precio" type="number" class="validate">
              <label for="precio">Precio</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s8">
              <select name="marca" id="marca">
                      <option>Elija la marca</option>
                      @foreach ($marcas as $marca)
                          <option value="{{ $marca->id }}">
                            {{ $marca->nombre }}
                          </option>
                      @endforeach
              </select>
            </div>
          </div>

          <div class="row">
            <div class="col s8 input-field">
              <select name="categoria" id="categoria">
                @foreach($categorias as $categoria)
                  <option value="{{ $categoria->id }}">
                    {{ $categoria->nombre }}
                  </option>
                @endforeach
              </select>
            </div>
          </div>

          <div class="fila">
            <div class="file-field input-field">
              <div class="btn">
                <span>Coloca aquí la imagen del producto</span>
                <input type="file">
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
              </div>
            </div>
          </div>
          
          <div class="col s8">
          <center>
            <button class="btn waves-effect waves-light" type="submit">Enviar</button>
          </center>
          </div>
        </form>
@endsection