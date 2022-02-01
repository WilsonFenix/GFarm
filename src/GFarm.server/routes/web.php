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

Route::get('/tarefas', function(){
    $tarefas = [
        "lavrar a terra",
        "fazer colheita",
        "vender insumos"
    ];

    $html = "<ul>";
    foreach($tarefas as $tarefa){
        $html .= "<li>$tarefa</li>";
    }
    $html .= "</ul>";
    return $html;
});
