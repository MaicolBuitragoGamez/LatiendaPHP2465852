@extends('layouts.principal')
@section('contenido')


<Style>
    .col{
        padding-left: 50px;
    }
</Style>
        <form class="col s8" method="POST" action="{{ route('productos.store') }}"
        enctype="multipart/form-data">
          @csrf 
          @if( session('mensajito') )
          <div class="row">
            <strong>{{ session('mensajito') }}</strong>
          </div>

          @endif
            <div class="row">
                <div class="col s8">
                    <h1 class="cyan darken-3">Nuevo producto de la tienda</h1>
                </div>
            </div>

          <div class="row">
            <div class="input-field col s6">
              <input name="nombre" placeholder="Nombre del producto" id="nombre" type="text" class="validate">
              <label for="nombre">Nombre del producto</label>
              <strong>{{ $errors->first('nombre') }}</strong>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s8">
              <input name="desc" id="desc" type="text" class="validate">
              <label for="desc">Descripción</label>
              <strong>{{ $errors->first('desc') }}</strong>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s8">
              <input name="precio" id="precio" type="number" class="validate">
              <label for="precio">Precio</label>
              <strong>{{ $errors->first('precio') }}</strong>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s8">
              <select name="marca" id="marca">
                      <option value="">Elija la marca</option>
                      @foreach ($marcas as $marca)
                          <option value="{{ $marca->id }}">
                            {{ $marca->nombre }}
                          </option>
                      @endforeach
              </select>
              <label>Elija marca</label>
              <strong>{{ $errors->first('marca') }}</strong>
            </div>
          </div>

          <div class="row">
            <div class="col s8 input-field">
              <select name="categoria" id="categoria">
                <option value="">Elija la categoria</option>
                @foreach($categorias as $categoria)
                  <option value="{{ $categoria->id }}">
                    {{ $categoria->nombre }}
                  </option>
                @endforeach
              </select>
              <label>Elija categoria</label>
              <strong>{{ $errors->first('categoria') }}</strong>
            </div>
          </div>

        <div class="row">
          <div class="file-field input-field">
            <div class="btn">
              <span>File</span>
              <input type="file" name="imagen" multiple>
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text" placeholder="Suba su fotitos xd">
            </div>
          </div>
          <strong>{{ $errors->first('imagen') }}</strong>
        </div>
          
          <div class="col s8">
          <center>
            <button class="btn waves-effect waves-light" type="submit">Enviar</button>
          </center>
          </div>
        </form>
@endsection