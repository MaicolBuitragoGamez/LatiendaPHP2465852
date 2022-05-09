@extends('layouts.principal')
@section('contenido')


<Style>
    .col{
        padding-left: 50px;
    }
</Style>
        <form class="col s8">
            <div class="row">
                <div class="col s8">
                    <h1 class="cyan darken-3">Nuevo producto de la tienda</h1>
                </div>
            </div>

          <div class="row">
            <div class="input-field col s6">
              <input placeholder="Nombre del producto" id="Nombre" type="text" class="validate">
              <label for="nombre">Nombre del producto</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s8">
              <input id="descripción" type="text" class="validate">
              <label for="desc">Descripción</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s8">
              <input id="precio" type="number" class="validate">
              <label for="precio">Precio</label>
            </div>
          </div>

          <form action="#">
            <div class="file-field input-field">
              <div class="btn">
                <span>Coloca aquí la imagen del producto</span>
                <input type="file">
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
              </div>
            </div>
          </form>

          <div class="col s8">
            <center>
                <a class="waves-effect waves-light btn">Enviar</a>
              </button>
              </center>
          </div>
        </form>
@endsection