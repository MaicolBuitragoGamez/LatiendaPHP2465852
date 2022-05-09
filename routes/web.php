<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('paises', function(){
    //Arreglo
    $paises = [
        "Colombia"=> [
            "cap" => "Bogotá",
            "mon" => "Peso",
            "pob" => 51,
            "ciu" => [
                "Medellín",
                "Cali",
                "Pereira"
            ]
        ],
        "Ecuador"=> [
            "cap" => "Quito",
            "mon" => "Dólar",
            "pob" => 17,64,
            "ciu" => [
                "Guayaquil",
                "Cuenca",
            ]
        ],
        "México"=>[
            "cap" => "Ciudad México",
            "mon" => "Pesos",
            "pob" => 128,9,
            "ciu" => [
                "Guadalajara",
                "Cancún",
                "Cuernavaca",
                "Sinaloa"
            ]
        ]
    ];
    return view ('paises')
    ->with('paises', $paises);
});


Route::get('prueba',function(){
    return view ('productos.create');
});