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
route::get("variables", function(){
    $mensaje= 20;
    var_dump($mensaje);
    echo "<hr />";
    $mensaje = "hola 2242753";
    var_dump ($mensaje);
});
route::get("arreglos", function(){
// definir alegro en php
$estudiantes = ["AN"=>"Ana",
"MA"=>"Maria",
"JO" => "Jorge" ];
echo "<pre>";
print_r($estudiantes);
echo "<pre>";
});



route::get('paises', function(){
    $paises = [
        "colombia" => ['capital' => 'bogota',
    'moneda' => 'peso colombiano',
'poblacion' => '51'],
        "peru" => ['capital' => 'Lima',
        'moneda' => 'sol',
    'poblacion' => 7],
        "paraguay" =>['capital' => 'Asuncion',
        'moneda' => 'Guaraní paraguayo',
    'poblacion' => 10]
    ];

    return view  ('paises')->with('naciones',$paises);

});


Route::get('mostrar_formulario', 'MetabuscadorController@mostrar_formulario');
Route::post('buscar_termino',"MetabuscadorController@buscar_termino");

