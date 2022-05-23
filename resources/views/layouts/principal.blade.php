<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('materialize/css/materialize.css') }}">
    <title>HOLA-HOLA-HOLA</title>
</head>
<body>
    
    <nav>
        <div class="nav-wrapper cyan darken-3">
          <a href="#" class="brand-logo">La tienda PHP de Maicol y Nicolas</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="sass.html">Productos</a></li>
            <li><a href="badges.html">Pedidos</a></li>
            <li><a href="collapsible.html">Cerrar Sesión</a></li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
        @yield('contenido')
      </div>



    <script src="{{ asset('materialize/js/materialize.js') }}"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('select');
      var instances = M.FormSelect.init(elems, []);
      });
    </script>
</body>
</html>